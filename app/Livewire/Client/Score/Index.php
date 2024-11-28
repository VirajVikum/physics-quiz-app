<?php

namespace App\Livewire\Client\Score;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.score.index')->layout('layouts.app');
    }
}
