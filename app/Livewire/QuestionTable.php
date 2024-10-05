<?php

namespace App\Livewire;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class QuestionTable extends PowerGridComponent
{
    public string $tableName = 'question-table-6hgidl-table';

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
        return DB::table('questions');
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('question')
            ->add('option1')
            ->add('option2')
            ->add('option3')
            ->add('option4')
            ->add('option5')
            ->add('answer')
            ->add('level')
            ->add('category')
            ->add('created_at')
            ->add('updated_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Question', 'question')
                ->sortable()
                ->searchable(),

            Column::make('Option1', 'option1')
                ->sortable()
                ->searchable(),

            Column::make('Option2', 'option2')
                ->sortable()
                ->searchable(),

            Column::make('Option3', 'option3')
                ->sortable()
                ->searchable(),

            Column::make('Option4', 'option4')
                ->sortable()
                ->searchable(),

            Column::make('Option5', 'option5')
                ->sortable()
                ->searchable(),

            Column::make('Answer', 'answer')
                ->sortable()
                ->searchable(),

            Column::make('Level', 'level')
                ->sortable()
                ->searchable(),

            Column::make('Category', 'category')
                ->sortable()
                ->searchable(),

            // Column::make('Created at', 'created_at_formatted', 'created_at')
            //     ->sortable(),

            Column::make('Created at', 'created_at')
                ->sortable()
                ->searchable(),

            // Column::make('Updated at', 'updated_at_formatted', 'updated_at')
            //     ->sortable(),

            // Column::make('Updated at', 'updated_at')
            //     ->sortable()
            //     ->searchable(),

                Column::action('Action')
            ->visibleInExport(visible: false),

        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    public function actions($row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit: '.$row->id)
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->openModal('admin.questions.create-question', ['isEdit' => true, 'questionId' => $row->id, 'question'=> $row->question, 'option1'=> $row->option1, 'option2'=> $row->option2, 'option3'=> $row->option3, 'option4'=> $row->option4, 'option5'=> $row->option5, 'answer'=> $row->answer, 'selectedLevel'=> $row->level, 'selectedCategory'=> $row->category,]),
        ];
    }

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
