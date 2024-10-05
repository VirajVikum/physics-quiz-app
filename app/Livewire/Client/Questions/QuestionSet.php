<?php

namespace App\Livewire\Client\Questions;

use App\Models\Question;
use Livewire\Component;

class QuestionSet extends Component
{
    public $questions;

    public function mount()
    {
        $this->questions=Question::all();
    }

    public function render()
    {
        return view('livewire.client.questions.question-set');
    }
}
