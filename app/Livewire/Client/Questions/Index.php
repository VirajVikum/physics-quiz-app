<?php

namespace App\Livewire\Client\Questions;

use Livewire\Component;

class Index extends Component
{
    public $sub_category;
    public $category;

    public function mount($cat,$sub)
    {
        $this->sub_category=$sub;
        $this->category=$cat;
    }

    public function render()
    {
        return view('livewire.client.questions.index')->layout('layouts.app');
    }
}
