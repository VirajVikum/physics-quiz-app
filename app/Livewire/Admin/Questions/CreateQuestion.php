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
    public $selectedLevel = '';
    public $selectedCategory = '';
    public $selectedSubcategory = '';
    public $sub_categories = [];

    protected $rules = [
        'question' => 'required',
        'option1' => 'required',
        'option2' => 'required',
        'option3' => 'required',
        'option4' => 'required',
        'option5' => 'required',
        'answer' => 'required',
        'selectedCategory' => 'required',
        'selectedSubcategory' => 'required',
    ];

    public function mount()
    {
        $this->categories = QuestionCategory::all();
        $this->levels = QuestionLevel::all();

        if ($this->selectedCategory) {
            $category = QuestionCategory::where('category', $this->selectedCategory)->first();

            // Check if the category was found and if the sub_category data is available
            if ($category && $category->sub_categories) {
                // Explode the comma-separated sub_category string into an array
                $this->sub_categories = explode(',', $category->sub_categories);
            } else {
                // Handle the case where no sub_categories are found
                $this->sub_categories = [];
            }
        }
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
            'sub_category' => $this->selectedSubcategory,
            'level' => $this->selectedLevel,
        ]);

        $this->closeModal();
        return redirect()->to(url()->previous());
    }

    public function update()
    {

        $validatedData = $this->validate();
        $question = Question::findOrFail($this->questionId);
        $question->update([
            'question' => $this->question,
            'option1' =>  $this->option1,
            'option2' =>  $this->option2,
            'option3' =>  $this->option3,
            'option4' =>  $this->option4,
            'option5' =>  $this->option5,
            'answer' => $this->answer,
            'category' => $this->selectedCategory,
            'sub_category' => $this->selectedSubcategory,
            'level' => $this->selectedLevel,
        ]);

        $this->closeModal();
        return redirect()->to(url()->previous());
    }



    public function updated($selectedCategory)
    {
        // dd('ghh');

        // Fetch the sub_category data from the QuestionCategory model
        $category = QuestionCategory::where('category', $this->selectedCategory)->first();

        // Check if the category was found and if the sub_category data is available
        if ($category && $category->sub_categories) {
            // Explode the comma-separated sub_category string into an array
            $this->sub_categories = explode(',', $category->sub_categories);
        } else {
            // Handle the case where no sub_categories are found
            $this->sub_categories = [];
        }
    }

    public function render()
    {
        return view('livewire.admin.questions.create-question');
    }
}
