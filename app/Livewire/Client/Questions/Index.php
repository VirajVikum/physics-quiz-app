<?php

namespace App\Livewire\Client\Questions;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.questions.index')->layout('layouts.app');
    }
}
