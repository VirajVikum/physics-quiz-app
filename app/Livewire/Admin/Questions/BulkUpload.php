<?php

namespace App\Livewire\Admin\Questions;

use App\Models\Question;
use App\Models\QuestionCategory;
use App\Models\QuestionLevel;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use PhpOffice\PhpSpreadsheet\IOFactory;

class BulkUpload extends ModalComponent
{
    use WithFileUploads;

    public $isEdit = false;
    public $question, $questionId, $option1, $option2, $option3, $option4, $option5, $answer;
    public $categories, $levels;
    public $selectedLevel = '';
    public $selectedCategory = '';
    public $selectedSubcategory = '';
    public $sub_categories = [];
    public $excelFile;

    protected $rules = [
        'excelFile' => 'nullable|file|mimes:xlsx|max:10240',
        'selectedCategory' => 'required',
        'selectedLevel' => 'required',
        'selectedSubcategory' => 'required',
    ];

    protected $messages = [
        'selectedLevel.required' => 'Please select a level for the question.',
    ];

    public function uploadQuestionsFromExcel()
{
    if ($this->excelFile) {
        $spreadsheet = IOFactory::load($this->excelFile->getRealPath());
        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        foreach (array_slice($sheetData, 1) as $row) {
            if (!Question::where('question', $row[0])->exists()) {
            Question::create([
                'type' => $row[0], // Adjust according to your column setup
                'question' => $row[1], // Adjust according to your column setup
                'option1' => $row[2],
                'option2' => $row[3],
                'option3' => $row[4],
                'option4' => $row[5],
                'option5' => $row[6],
                'answer' => $row[7],
                'category' => $this->selectedCategory,
                'sub_category' => $this->selectedSubcategory,
                'level' => $this->selectedLevel,
            ]);
        }
        }

        session()->flash('message', 'Questions uploaded successfully!');
        $this->closeModal();
        return redirect()->to(url()->previous());
    }
}

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
        return view('livewire.admin.questions.bulk-upload');
    }
}
