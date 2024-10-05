<div class="md:max-h-screen max-h-[300px] overflow-y-auto">
    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            {{ $isEdit ? 'Edit Question' : 'Create New Question' }}
        </h3>
        <button type="button" wire:click="$dispatch('closeModal')"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-4 h-4 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-toggle="crud-modal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
        </button>
    </div>
    <!-- Modal body -->
    <form class="p-4 md:p-5">
        @csrf
        <div class="">
            <div class="">
                <div class="pt-2">
                    <label for="selectedCategory"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Question Category</label>
                    <select id="selectedCategory" name="selectedCategory" wire:model="selectedCategory"
                        class="text-black bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-300 dark:hover:bg-gray-400 dark:focus:ring-gray-500 block w-full">
                        <option value="" disabled selected>Select a category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->category}}">{{$category->category}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="pt-2">
                    <label for="selectedLevel"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Question Level</label>
                    <select id="selectedLevel" name="selectedLevel" wire:model="selectedLevel"
                        class="text-black bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-300 dark:hover:bg-gray-400 dark:focus:ring-gray-500 block w-full">
                        <option value="" disabled selected>Select a level</option>
                        @foreach($levels as $level)
                        <option value="{{$level->level}}">{{$level->level}}</option>
                        @endforeach
                    </select>

                </div>

                <label for="question"
                    class="pt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Question</label>
                <textarea rows=3 wire:model="question" name="question" id="question"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Enter New Question"> </textarea>

                <label for="option1" class="block text-sm font-medium text-gray-900 dark:text-white pt-2">Option
                    1</label>
                <input type="text" wire:model="option1" name="option1" id="option1"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Enter Option 1">

                <label for="option2" class="block pt-2 text-sm font-medium text-gray-900 dark:text-white">Option
                    2</label>
                <input type="text" wire:model="option2" name="option2" id="option2"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Enter Option 2">

                <label for="option3" class="block pt-2 text-sm font-medium text-gray-900 dark:text-white">Option
                    3</label>
                <input type="text" wire:model="option3" name="option3" id="option3"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Enter Option 3">

                <label for="option4" class="block pt-2 text-sm font-medium text-gray-900 dark:text-white">Option
                    4</label>
                <input type="text" wire:model="option4" name="option4" id="option4"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Enter Option 4">

                <label for="option5" class="block pt-2 text-sm font-medium text-gray-900 dark:text-white">Option
                    5</label>
                <input type="text" wire:model="option5" name="option5" id="option5"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Enter Option 5">

                <label for="answer" class="block pt-2 text-sm font-medium text-gray-900 dark:text-white">Correct
                    Answer</label>
                <input type="text" wire:model="answer" name="answer" id="answer"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Enter Correct Answer">


            </div>

        </div>
        <div class="pt-2">
            <button type="button" wire:click="{{ $isEdit ? 'update' : 'create' }}"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                {{ $isEdit ? 'Update' : 'Save' }}
            </button>
        </div>
    </form>
</div>
