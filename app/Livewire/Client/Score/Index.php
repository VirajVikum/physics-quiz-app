<?php

namespace App\Livewire\Client\Score;

use App\Models\ClientAchievement;
use App\Models\QuestionCategory;
use Livewire\Component;

class Index extends Component
{
    public $completedPercentage;
    public $achievements;

    public function mount()
    {
    $totalSubCategories = QuestionCategory::where('delete_status', 0)
    ->get()
    ->reduce(function ($carry, $item) {
        // Split sub_categories by commas and count them
        $subCategoryCount = count(explode(',', $item->sub_categories));
        return $carry + $subCategoryCount;
    }, 0);

    $completedCount = ClientAchievement::where('client_id',auth()->id())
    ->count();

    $this->completedPercentage = floor(($completedCount / $totalSubCategories) * 100);

    $this->achievements = ClientAchievement::where('client_id' , auth()->id())->get();

}

    public function render()
    {
        return view('livewire.client.score.index')->layout('layouts.app');
    }
}
