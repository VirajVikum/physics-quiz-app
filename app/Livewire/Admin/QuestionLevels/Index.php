<?php

namespace App\Livewire\Admin\QuestionLevels;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.question-levels.index')->layout('layouts.app');
    }
}
