<?php

namespace App\Livewire\Admin\QuestionCategories;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.question-categories.index')->layout('layouts.app');
    }
}
