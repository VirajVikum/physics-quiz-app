<div class="h-screen overflow-y-scroll ">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Question ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                    {{ $category }}
                    {{ $sub_category }}


                    @foreach ($questions as $question)
                        <div class=" bg-blue-100 m-2 rounded-md p-2">
                            <h1 class=" font-bold md:text-xl sm:text-sm lg:text-xl">{{ $loop->iteration }}.
                                {{ $question->question }}</h1> <!-- Question number -->

                            <!-- Radio buttons with text on the right -->
                            <!-- Option 1 -->
                            <div class="flex items-center mb-4 ml-10 mt-4">
                                <button wire:click="optionSelected({{ $question->id }}, '{{ $question->option1 }}')"
                                    class="border border-lightBlue hover:border-blue-400 rounded p-1
                @if (isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] === $question->answer &&
                        $question->option1 === $question->answer) bg-green-400 
                @elseif(isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] === $question->option1 &&
                        $selectedAnswers[$question->id] !== $question->answer) 
                    bg-red-400 
                @elseif(isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] !== $question->answer &&
                        $question->option1 === $question->answer) 
                    bg-green-400 @endif"
                                    @disabled(isset($completedQuestions[$question->id]))>
                                    i.) {{ $question->option1 }}
                                </button>
                                @if (isset($selectedAnswers[$question->id]))
                                    @if ($question->option1 === $question->answer && $selectedAnswers[$question->id] !== null)
                                        <span class="text-green-600 ml-2">✔️</span>
                                    @elseif($selectedAnswers[$question->id] === $question->option1 && $selectedAnswers[$question->id] !== $question->answer)
                                        <span class="text-red-600 ml-2">❌</span>
                                    @endif
                                @endif
                            </div>

                            <!-- Option 2 -->
                            <div class="flex items-center mb-4 ml-10 mt-4">
                                <button wire:click="optionSelected({{ $question->id }}, '{{ $question->option2 }}')"
                                    class="border border-lightBlue hover:border-blue-400 rounded p-1
                @if (isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] === $question->answer &&
                        $question->option2 === $question->answer) bg-green-400 
                @elseif(isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] === $question->option2 &&
                        $selectedAnswers[$question->id] !== $question->answer) 
                    bg-red-400 
                @elseif(isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] !== $question->answer &&
                        $question->option2 === $question->answer) 
                    bg-green-400 @endif"
                                    @disabled(isset($completedQuestions[$question->id]))>
                                    ii.) {{ $question->option2 }}
                                </button>
                                @if (isset($selectedAnswers[$question->id]))
                                    @if ($question->option2 === $question->answer && $selectedAnswers[$question->id] !== null)
                                        <span class="text-green-600 ml-2">✔️</span>
                                    @elseif($selectedAnswers[$question->id] === $question->option2 && $selectedAnswers[$question->id] !== $question->answer)
                                        <span class="text-red-600 ml-2">❌</span>
                                    @endif
                                @endif
                            </div>

                            <!-- Option 3 -->
                            <div class="flex items-center mb-4 ml-10 mt-4">
                                <button wire:click="optionSelected({{ $question->id }}, '{{ $question->option3 }}')"
                                    class="border border-lightBlue hover:border-blue-400 rounded p-1
                @if (isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] === $question->answer &&
                        $question->option3 === $question->answer) bg-green-400 
                @elseif(isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] === $question->option3 &&
                        $selectedAnswers[$question->id] !== $question->answer) 
                    bg-red-400 
                @elseif(isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] !== $question->answer &&
                        $question->option3 === $question->answer) 
                    bg-green-400 @endif"
                                    @disabled(isset($completedQuestions[$question->id]))>
                                    iii.) {{ $question->option3 }}
                                </button>
                                @if (isset($selectedAnswers[$question->id]))
                                    @if ($question->option3 === $question->answer && $selectedAnswers[$question->id] !== null)
                                        <span class="text-green-600 ml-2">✔️</span>
                                    @elseif($selectedAnswers[$question->id] === $question->option3 && $selectedAnswers[$question->id] !== $question->answer)
                                        <span class="text-red-600 ml-2">❌</span>
                                    @endif
                                @endif
                            </div>

                            <!-- Option 4 -->
                            <div class="flex items-center mb-4 ml-10 mt-4">
                                <button wire:click="optionSelected({{ $question->id }}, '{{ $question->option4 }}')"
                                    class="border border-lightBlue hover:border-blue-400 rounded p-1
                @if (isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] === $question->answer &&
                        $question->option4 === $question->answer) bg-green-400 
                @elseif(isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] === $question->option4 &&
                        $selectedAnswers[$question->id] !== $question->answer) 
                    bg-red-400 
                @elseif(isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] !== $question->answer &&
                        $question->option4 === $question->answer) 
                    bg-green-400 @endif"
                                    @disabled(isset($completedQuestions[$question->id]))>
                                    iv.) {{ $question->option4 }}
                                </button>
                                @if (isset($selectedAnswers[$question->id]))
                                    @if ($question->option4 === $question->answer && $selectedAnswers[$question->id] !== null)
                                        <span class="text-green-600 ml-2">✔️</span>
                                    @elseif($selectedAnswers[$question->id] === $question->option4 && $selectedAnswers[$question->id] !== $question->answer)
                                        <span class="text-red-600 ml-2">❌</span>
                                    @endif
                                @endif
                            </div>

                            <!-- Option 5 -->
                            <div class="flex items-center mb-4 ml-10 mt-4">
                                <button wire:click="optionSelected({{ $question->id }}, '{{ $question->option5 }}')"
                                    class="border border-lightBlue hover:border-blue-400 rounded p-1
                @if (isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] === $question->answer &&
                        $question->option5 === $question->answer) bg-green-400 
                @elseif(isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] === $question->option5 &&
                        $selectedAnswers[$question->id] !== $question->answer) 
                    bg-red-400 
                @elseif(isset($selectedAnswers[$question->id]) &&
                        $selectedAnswers[$question->id] !== $question->answer &&
                        $question->option5 === $question->answer) 
                    bg-green-400 @endif"
                                    @disabled(isset($completedQuestions[$question->id]))>
                                    v.) {{ $question->option5 }}
                                </button>
                                @if (isset($selectedAnswers[$question->id]))
                                    @if ($question->option5 === $question->answer && $selectedAnswers[$question->id] !== null)
                                        <span class="text-green-600 ml-2">✔️</span>
                                    @elseif($selectedAnswers[$question->id] === $question->option5 && $selectedAnswers[$question->id] !== $question->answer)
                                        <span class="text-red-600 ml-2">❌</span>
                                    @endif
                                @endif
                            </div>


                            <br>
                        </div>
                    @endforeach
                    <div>
                        @if ($showResult)

                            <button type="button"
                                wire:click="$dispatch('openModal', { component: 'client.questions.result-modal', arguments: {result: {{ $result }}} })">Show Results</button>
                        @else
                            <button wire:click='showResults'>Show Results</button>
                            @if ($errorMessage)
                                <div class="text-red-500 mt-2">{{ $errorMessage }}</div>
                            @endif

                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
