<?php

namespace App\Livewire\Client;

use App\Models\QuestionCategory;
use App\Models\QuestionLevel;
use Livewire\Component;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class Index extends Component
{
    public $categories;
    public $selectedCategory;
    public $randomImageNumber;
    public $sub_categories = [];

    public $levels;
    public $selectedLevel;

    public function mount()
    {
        $this->levels = QuestionLevel::where('delete_status', 0)->get();
        $this->selectedLevel = QuestionLevel::where('delete_status', 0)->first()->level;

        $this->categories = QuestionCategory::where('delete_status', 0)->get();
        $this->selectedCategory = QuestionCategory::where('delete_status', 0)->first()->category;        
        $this->randomImageNumber=rand(1, 17);

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

    // public function updated($selectedLevel)
    // {
    //     $this->dispatch();
    // }

    public function updated($selectedCategory)
    {
        // dd('ghh');
        $this->randomImageNumber=rand(1, 17);

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
        return view('livewire.client.index');
    }
}
