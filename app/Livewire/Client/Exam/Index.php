<?php

namespace App\Livewire\Client\Exam;

use App\Models\ClientAchievement;
use Livewire\Component;
use App\Models\ClientActivityDetail;
use App\Models\Question;

class Index extends Component
{
    public $level;

    public $sub_category;
    public $category;
    public $questions;
    public $selectedOption;
    public $selectedQuestionId;
    public $selectedAnswers = [];
    public $completedQuestions = [];
    public $correctAnswersCount = 0;
    public $questionCount = 0;
    public $errorMessage = null;
    public $result;
    public $showResult = false;
    public $grade;

    public $MaxQuizResult = 0;



    public function mount($cat, $lvl, $sub)
    {
        $this->sub_category = $sub;
        $this->category = $cat;
        $this->level = $lvl;

        $this->questions = Question::where('category', $this->category)
            ->where('type', 'Exam')
            ->where('level', $this->level)
            ->where('sub_category', $this->sub_category)
            ->inRandomOrder()
            ->take(20)
            ->get();

        $maxMark = ClientAchievement::where('category', $this->category)
            ->where('client_id', auth()->id())
            ->where('level', $this->level)
            ->where('sub_category', $this->sub_category)
            ->max('marks');

        $this->MaxQuizResult = $maxMark;
    }

    public function optionSelected($questionId, $option)
    {
        $this->selectedQuestionId = $questionId;
        $this->selectedOption = $option;
        $this->selectedAnswers[$questionId] = $option;
        $this->completedQuestions[$questionId] = true;
        $this->questionCount++;

        $question = $this->questions->firstWhere('id', $questionId);
        if ($question && $option === $question->answer) {
            $this->correctAnswersCount++;
        }
    }

    public function showResults()
    {
        if ($this->questionCount == 20) {
            // Proceed with showing results
            $this->errorMessage = null; // Clear any previous error
            $this->result = ($this->correctAnswersCount / $this->questionCount) * 100;
            $this->showResult = true;

            $data = [
                'client_id' => auth()->id(),
                'type' => 'Exam',
                'level' => $this->level,
                'category' => $this->category,
                'sub_category' => $this->sub_category,
                'marks' => $this->result,
            ];

            $activityDetail = ClientActivityDetail::create($data);

            $marks = $this->result;

            if ($marks >= 75) {
                $this->grade = 'A';
            } elseif ($marks >= 65) {
                $this->grade = 'B';
            } elseif ($marks >= 40) {
                $this->grade = 'C';
            }

            $achievement = [
                'client_id' => auth()->id(),
                'level' => $this->level,
                'category' => $this->category,
                'sub_category' => $this->sub_category,
                'marks' => $this->result,
                'grade' => $this->grade,
            ];

            // Create the record

            $existingRecord = ClientAchievement::where('client_id', auth()->id())
                ->where('level', $this->level)
                ->where('category', $this->category)
                ->where('sub_category', $this->sub_category)
                ->first();

                if ($marks >= 40) {
                    if ($existingRecord) {
                        // Update the existing record
                        if($this->MaxQuizResult < $marks)
                        {
                        $existingRecord->update([
                            'marks' => $marks,
                            'grade' => $this->grade,
                        ]);
                    }
                    } else {
                        $activityDetail = ClientAchievement::create($achievement);
                    }
                }


            // Code to show the results
        } else {
            $this->errorMessage = "Please answer all 20 questions before viewing the results.";
        }
    }

    public function render()
    {
        return view('livewire.client.exam.index')->layout('layouts.app');
    }
}
