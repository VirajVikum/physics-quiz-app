<?php

namespace App\Livewire;

use App\Models\ClientActivityDetail;
use App\Models\QuestionCategory;
use App\Models\QuestionLevel;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class ClientActivityDetailsTable extends DataTableComponent
{
    protected $model = ClientActivityDetail::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSearchDebounce(500);
        $this->setColumnSelectStatus(true);
    }

    public function query(): Builder
    {
        $query = ClientActivityDetail::query()->where('client_id', auth()->id());

        // Debugging: Dump filter values to check if they are being applied
        // logger()->info('Filter Values:', [
        //     'category' => $this->getFilter('category'),
        //     'level' => $this->getFilter('level'),
        //     'type' => $this->getFilter('type'),
        // ]);

        if (!empty($this->getFilter('category'))) {
            $query->where('category', $this->getFilter('category'));
        }

        if (!empty($this->getFilter('level'))) {
            $query->where('level', $this->getFilter('level'));
        }

        if (!empty($this->getFilter('type'))) {
            $query->where('type', $this->getFilter('type'));
        }

        return $query;
    }

    public function columns(): array
    {
        return [
            Column::make("Type", "type")
                ->sortable()
                ->searchable(),

            Column::make("Level", "level")
                ->sortable()
                ->searchable(),

            Column::make("Category", "category")
                ->sortable()
                ->searchable(),

            Column::make("Sub category", "sub_category")
                ->sortable()
                ->searchable(),

            Column::make("Marks", "marks")
                ->sortable()
                ->searchable(),

            Column::make("Completed at", "created_at")
                ->sortable()
                ->searchable(),
        ];
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Category')
                ->options(QuestionCategory::pluck('category', 'category')->toArray())
                ->filter(function (Builder $query, string $value) {
                    $query->where('category', $value);
                }),

            SelectFilter::make('Level')
                ->options(QuestionLevel::pluck('level', 'level')->toArray())
                ->filter(function (Builder $query, string $value) {
                    $query->where('level', $value);
                }),

            SelectFilter::make('Type')
                ->options([
                    'Quiz' => 'Quiz',
                    'Exam' => 'Exam',
                ])
                ->filter(function (Builder $query, string $value) {
                    $query->where('type', $value);
                }),
        ];
    }
}
