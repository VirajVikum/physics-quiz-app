<?php

namespace App\Livewire\Admin\QuestionCategories;

use App\Models\QuestionCategory;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateCategory extends ModalComponent
{
    public $isEdit = false;
    public $category, $categoryId;

    protected $rules =[
        'category'=>'required',
    ];

    public function create()
    {
        $validatedData = $this->validate();
        QuestionCategory::create($validatedData);
        $this->closeModal();
        return redirect()->to(url()->previous());
    }

    public function update()
    {

        $validatedData = $this->validate();
        $category = QuestionCategory::findOrFail($this->categoryId);
        $category->update($validatedData);

        $this->closeModal();
        return redirect()->to(url()->previous());
    }

    public function render()
    {
        return view('livewire.admin.question-categories.create-category')->layout('layouts.app');
    }
}
