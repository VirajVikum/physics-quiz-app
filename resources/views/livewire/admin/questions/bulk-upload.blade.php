<div class="md:max-h-screen max-h-[300px] overflow-y-auto">
    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            Create New Questions
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
                        @foreach ($categories as $category)
                            <option value="{{ $category->category }}">{{ $category->category }}</option>
                        @endforeach
                    </select>
                    @error('selectedCategory')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror

                </div>

                <div wire:poll class="pt-2">
                    <label for="selectedSubcategory"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Question Sub
                        Category</label>
                    <select id="selectedSubcategory" name="selectedSubcategory" wire:model="selectedSubcategory"
                        class="text-black bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-300 dark:hover:bg-gray-400 dark:focus:ring-gray-500 block w-full">
                        <option value="" disabled selected>Select a sub category</option>
                        @foreach ($sub_categories as $sub_category)
                            <option value="{{ $sub_category }}">{{ $sub_category }}</option>
                        @endforeach
                    </select>
                    @error('selectedSubcategory')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror

                </div>

                <div class="pt-2 pb-3">
                    <label for="selectedLevel"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Question Level</label>
                    <select id="selectedLevel" name="selectedLevel" wire:model="selectedLevel"
                        class="text-black bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-300 dark:hover:bg-gray-400 dark:focus:ring-gray-500 block w-full">
                        <option value="" disabled selected>Select a level</option>
                        @foreach ($levels as $level)
                            <option value="{{ $level->level }}">{{ $level->level }}</option>
                        @endforeach
                    </select>
                    @error('selectedLevel')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror

                </div>

                <input type="file" wire:model="excelFile" accept=".xlsx" />
                @error('excelFile')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

            </div>

        </div>
        <div class="pt-3">
            <button type="button" wire:click="uploadQuestionsFromExcel"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Save
            </button>
        </div>
    </form>
</div>
