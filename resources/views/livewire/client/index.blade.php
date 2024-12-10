<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-300 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                        <!-- Dropdown 1 -->
                        <div class="flex flex-col items-start">
                            <h2 class="font-bold text-xl text-darkBlue leading-tight animate-pulse pb-2">
                                Select the Category Here
                            </h2>
                            <select id="dropdownDefaultButton" wire:model="selectedCategory"
                                class="w-full md:w-auto text-white bg-darkBlue hover:bg-darkBlue focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-transform duration-300 hover:scale-110">
                                <option value="" disabled selected>Dropdown menu</option>
                                @foreach ($categories as $category)
                                    <option class="font-semibold text-lg text-white rounded-xl"
                                        style="border-radius: 45px;" value="{{ $category->category }}">
                                        {{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Dropdown 2 -->
                        <div class="flex flex-col items-start">
                            <h2 class="font-bold text-xl text-darkBlue leading-tight animate-pulse pb-2">
                                Select the Question Level Here
                            </h2>
                            <select id="dropdownDefaultButton" wire:model="selectedLevel"
                                class="w-full md:w-auto text-white bg-darkBlue hover:bg-darkBlue focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-transform duration-300 hover:scale-110">
                                <option value="" disabled selected>Dropdown menu</option>
                                @foreach ($levels as $level)
                                    <option class="font-semibold text-lg text-white rounded-xl"
                                        style="border-radius: 45px;" value="{{ $level->level }}">{{ $level->level }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>




                    <div wire:poll.1s class="pt-6">
                        {{-- <h2>Select the sub title here</h2> <br> --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach ($sub_categories as $sub_category)
                                <div
                                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transform transition duration-300 hover:scale-90">
                                    <div wire:poll.10s class="flex justify-center items-center">
                                        <a
                                            href="{{ route('client.question-index', ['cat' => $selectedCategory, 'lvl' => $selectedLevel, 'sub' => $sub_category]) }}">
                                            <img class="p-8 rounded-xl h-80 w-120" style="border-radius: 45px;"
                                                src="/images/categories/{{ $randomImageNumber }}.jpeg"
                                                alt="physics quiz" />
                                        </a>
                                    </div>

                                    <div class="px-5 pb-5">
                                        <a href="#">
                                            <h5
                                                class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                {{ $sub_category }}</h5>
                                        </a>
                                        <!-- Rating stars  -->
                                        <div class="flex items-center mt-2.5 mb-5">
                                            @php
                                                $matched = false; // Track if there is a matching sub_category
                                            @endphp

                                            @foreach ($marks as $mark)
                                                @if ($sub_category == $mark->sub_category)
                                                    @php
                                                        $matched = true; // Set to true if a match is found
                                                        $maxStars = 5; // Total stars to display
                                                        $filledStars = floor($mark->max_marks / 20); // Number of filled stars (scaled to 0-5)
                                                        $filledStars = min($filledStars, $maxStars); // Ensure the value does not exceed 5
                                                        $mark20 = floor($mark->max_marks / 5);

                                                    @endphp

                                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                                        {{-- Render filled stars --}}
                                                        @for ($i = 0; $i < $filledStars; $i++)
                                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                            </svg>
                                                        @endfor

                                                        {{-- Render empty stars --}}
                                                        @for ($i = $filledStars; $i < $maxStars; $i++)
                                                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                            </svg>
                                                        @endfor
                                                    </div>

                                                    <span
                                                        class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">
                                                        {{ $mark->max_marks }}
                                                    </span>
                                                @endif
                                            @endforeach

                                            @if (!$matched)
                                                <span
                                                    class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">
                                                    Not played
                                                </span>
                                            @endif
                                        </div>



                                        <div class="flex items-center justify-between">

                                            @if ($matched)
                                                <span
                                                    class="text-3xl font-bold text-gray-900 dark:text-white">{{ $mark20 }}/20</span>
                                            @else
                                                <span
                                                    class="text-3xl font-bold text-gray-900 dark:text-white">-</span>
                                            @endif

                                            <a href="{{ route('client.question-index', ['cat' => $selectedCategory, 'lvl' => $selectedLevel, 'sub' => $sub_category]) }}"
                                                class="text-black bg-lightGray hover:darkBlue focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Lets
                                                Play</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
