<div>
    <x-slot name="header">
        <div class="flex justify-between items-end">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Question Category Management') }}
        </h2>
        <button type="button" class="text-right pr-2" onclick="Livewire.dispatch('openModal',{component: 'admin.question-categories.create-category'})">new</button>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:qcategory-table />
                </div>
            </div>
        </div>
    </div>
</div>
