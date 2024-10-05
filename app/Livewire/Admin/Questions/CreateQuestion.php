<?php

namespace App\Livewire\Admin\Questions;

use App\Models\Question;
use App\Models\QuestionCategory;
use App\Models\QuestionLevel;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateQuestion extends ModalComponent
{
    public $isEdit = false;
    public $question, $questionId, $option1, $option2, $option3, $option4, $option5, $answer;
    public $categories, $levels;
    public $selectedLevel='';
    public $selectedCategory='';

    protected $rules =[
        'question'=>'required',
        'option1'=>'required',
        'option2'=>'required',
        'option3'=>'required',
        'option4'=>'required',
        'option5'=>'required',
        'answer'=>'required',
        'selectedCategory'=>'required',
        'selectedCategory'=>'required',
    ];

    public function mount()
    {
        $this->categories=QuestionCategory::all();
        $this->levels=QuestionLevel::all();
    }

    public function create()
    {
        $validatedData = $this->validate();

        Question::create([
            'question' => $this->question,
            'option1' =>  $this->option1,
            'option2' =>  $this->option2,
            'option3' =>  $this->option3,
            'option4' =>  $this->option4,
            'option5' =>  $this->option5,
            'answer' => $this->answer,
            'category' => $this->selectedCategory,
            'level' => $this->selectedLevel,
        ]);

        $this->closeModal();
        return redirect()->to(url()->previous());
    }

    public function update()
    {

        $validatedData = $this->validate();
        $question = Question::findOrFail($this->questionId);
        $question->update($validatedData);

        $this->closeModal();
        return redirect()->to(url()->previous());
    }

    public function render()
    {
        return view('livewire.admin.questions.create-question');
    }
}
