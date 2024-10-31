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
    public $questionCount = 0;
    public $errorMessage = null;
    public $result;
    public $showResult =false;

    public function mount($cat, $sub)
    {
        $this->sub_category = $sub;
        $this->category = $cat;

        $this->questions = Question::where('category', $this->category)
        ->where('sub_category', $this->sub_category)
        ->inRandomOrder()
        ->take(20)
        ->get();
    }

    public function optionSelected($questionId,$option)
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
            $this->result=($this->correctAnswersCount/ $this->questionCount)*100;
            $this->showResult=true;
          
            // Code to show the results
        } else {
            $this->errorMessage = "Please answer all 20 questions before viewing the results.";
        }
    }

    public function render()
    {
        return view('livewire.client.questions.index')->layout('layouts.app');
    }
}
