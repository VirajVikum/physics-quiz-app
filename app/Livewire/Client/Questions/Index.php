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
    }

    public function render()
    {
        return view('livewire.client.questions.index')->layout('layouts.app');
    }
}
