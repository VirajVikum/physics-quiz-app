<?php

namespace App\Livewire\Client\Questions;

use App\Models\Question;
use Livewire\Component;

class Index extends Component
{
    public $sub_category;
    public $category;
    public $questions;
    public $selectedOption;
    public $selectedQuestionId;
    public $selectedAnswers = [];
    public $completedQuestions = [];
    public $correctAnswersCount = 0;
    public $QuestionCount = 0;

    public function mount($cat, $sub)
    {
        $this->sub_category = $sub;
        $this->category = $cat;

        $this->questions = Question::where('category', $this->category)
            ->where('sub_category', $this->sub_category)
            ->get();
    }

    public function optionSelected($questionId,$option)
    {
        $this->selectedQuestionId = $questionId;
        $this->selectedOption = $option;
        $this->selectedAnswers[$questionId] = $option;
        $this->completedQuestions[$questionId] = true;
        $this->QuestionCount++;

        $question = $this->questions->firstWhere('id', $questionId); 
        if ($question && $option === $question->answer) {
            $this->correctAnswersCount++;
        }
    }

    public function render()
    {
        return view('livewire.client.questions.index')->layout('layouts.app');
    }
}
