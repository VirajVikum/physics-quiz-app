<?php

namespace App\Livewire\Admin\QuestionLevels;

use App\Models\QuestionLevel;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateLevel extends ModalComponent
{
    public $isEdit = false;
    public $level, $levelId;

    protected $rules =[
        'level'=>'required',
    ];

    public function create()
    {
        $validatedData = $this->validate();
        QuestionLevel::create($validatedData);
        $this->closeModal();
        return redirect()->to(url()->previous());
    }

    public function update()
    {

        $validatedData = $this->validate();
        $level = QuestionLevel::findOrFail($this->levelId);
        $level->update($validatedData);

        $this->closeModal();
        return redirect()->to(url()->previous());
    }

    public function render()
    {
        return view('livewire.admin.question-levels.create-level')->layout('layouts.app');
    }
}
