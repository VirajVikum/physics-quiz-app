<?php

namespace App\Livewire\Client\Exam;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ResultModal extends ModalComponent
{
    public $result;

    public function mount($result)
    {
        $this->result=$result;
    }

    public function render()
    {
        return view('livewire.client.exam.result-modal');
    }
}
