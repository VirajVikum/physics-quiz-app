<?php

namespace App\Livewire;

use App\Models\ClientActivityDetail;
use App\Models\QuestionCategory;
use App\Models\QuestionLevel;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class ClientActivityDetailsTable extends PowerGridComponent
{
    public string $tableName = 'client-activity-details-table-gzetnl-table';

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return ClientActivityDetail::query()->where('client_id', auth()->id());
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('client_id')
            ->add('type')
            ->add('level')
            ->add('category')
            ->add('sub_category')
            ->add('marks')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            // Column::make('Id', 'id'),
            // Column::make('Client id', 'client_id'),
            Column::make('Type', 'type')
                ->sortable()
                ->searchable(),

            Column::make('Level', 'level')
                ->sortable()
                ->searchable(),

            Column::make('Category', 'category')
                ->sortable()
                ->searchable(),

            Column::make('Sub category', 'sub_category')
                ->sortable()
                ->searchable(),

            Column::make('Marks', 'marks')
                ->sortable()
                ->searchable(),

            // Column::make('Created at', 'created_at_formatted', 'created_at')
            //     ->sortable(),

            Column::make('Completed at', 'created_at')
                ->sortable()
                ->searchable(),

            // Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::select('category', 'category')
                ->dataSource(QuestionCategory::all())
                ->optionLabel('category')
                ->optionValue('category'),

            Filter::select('level', 'level')
                ->dataSource(QuestionLevel::all())
                ->optionLabel('level')
                ->optionValue('level'),

            Filter::select('type', 'type')
            ->dataSource([
                ['type' => 'Quiz', 'label' => 'Quiz'],
                ['type' => 'Exam', 'label' => 'Exam'],
            ])
                ->optionLabel('type')
                ->optionValue('type'),
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    // public function actions(ClientActivityDetail $row): array
    // {
    //     return [
    //         Button::add('edit')
    //             ->slot('Edit: '.$row->id)
    //             ->id()
    //             ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
    //             ->dispatch('edit', ['rowId' => $row->id])
    //     ];
    // }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
