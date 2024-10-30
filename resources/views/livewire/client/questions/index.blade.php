<div>
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
                    {{$category}}
                    {{$sub_category}}
                    

                    @foreach($questions as $question)
                    <div class=" bg-blue-100 m-2 rounded-md p-2">
       <h1 class=" font-bold md:text-xl sm:text-sm lg:text-xl">{{ $loop->iteration }}. {{ $question->question }}</h1> <!-- Question number -->

       <!-- Radio buttons with text on the right -->
       <div class="flex items-center mb-4 ml-10 mt-4">
        <button wire:click="optionSelected({{ $question->id }}, '{{ $question->option1 }}')" 
                class="border border-lightBlue hover:border-blue-400 rounded p-1
                @if($selectedQuestionId === $question->id && $selectedOption === $question->answer && $question->option1 === $question->answer) 
                    bg-green-400 
                @elseif($selectedQuestionId === $question->id && $selectedOption === $question->option1 && $selectedOption !== $question->answer) 
                    bg-red-400 
                @elseif($selectedQuestionId === $question->id && $selectedOption !== $question->answer && $question->option1 === $question->answer) 
                    bg-green-400 
                @endif">
            i.) {{ $question->option1 }}
        </button>
        @if($selectedQuestionId === $question->id)
            @if($question->option1 === $question->answer && $selectedOption !== null)
                <span class="text-green-600 ml-2">✔️</span>
            @elseif($selectedOption === $question->option1 && $selectedOption !== $question->answer)
                <span class="text-red-600 ml-2">❌</span>
            @endif
        @endif
    </div>

    <!-- Option 2 -->
    <div class="flex items-center mb-4 ml-10 mt-4">
        <button wire:click="optionSelected({{ $question->id }}, '{{ $question->option2 }}')" 
                class="border border-lightBlue hover:border-blue-400 rounded p-1
                @if($selectedQuestionId === $question->id && $selectedOption === $question->answer && $question->option2 === $question->answer) 
                    bg-green-400 
                @elseif($selectedQuestionId === $question->id && $selectedOption === $question->option2 && $selectedOption !== $question->answer) 
                    bg-red-400 
                @elseif($selectedQuestionId === $question->id && $selectedOption !== $question->answer && $question->option2 === $question->answer) 
                    bg-green-400 
                @endif">
            ii.) {{ $question->option2 }}
        </button>
        @if($selectedQuestionId === $question->id)
            @if($question->option2 === $question->answer && $selectedOption !== null)
                <span class="text-green-600 ml-2">✔️</span>
            @elseif($selectedOption === $question->option2 && $selectedOption !== $question->answer)
                <span class="text-red-600 ml-2">❌</span>
            @endif
        @endif
    </div>

    <!-- Option 3 -->
    <div class="flex items-center mb-4 ml-10 mt-4">
        <button wire:click="optionSelected({{ $question->id }}, '{{ $question->option3 }}')" 
                class="border border-lightBlue hover:border-blue-400 rounded p-1
                @if($selectedQuestionId === $question->id && $selectedOption === $question->answer && $question->option3 === $question->answer) 
                    bg-green-400 
                @elseif($selectedQuestionId === $question->id && $selectedOption === $question->option3 && $selectedOption !== $question->answer) 
                    bg-red-400 
                @elseif($selectedQuestionId === $question->id && $selectedOption !== $question->answer && $question->option3 === $question->answer) 
                    bg-green-400 
                @endif">
            iii.) {{ $question->option3 }}
        </button>
        @if($selectedQuestionId === $question->id)
            @if($question->option3 === $question->answer && $selectedOption !== null)
                <span class="text-green-600 ml-2">✔️</span>
            @elseif($selectedOption === $question->option3 && $selectedOption !== $question->answer)
                <span class="text-red-600 ml-2">❌</span>
            @endif
        @endif
    </div>

    <!-- Option 4 -->
    <div class="flex items-center mb-4 ml-10 mt-4">
        <button wire:click="optionSelected({{ $question->id }}, '{{ $question->option4 }}')" 
                class="border border-lightBlue hover:border-blue-400 rounded p-1
                @if($selectedQuestionId === $question->id && $selectedOption === $question->answer && $question->option4 === $question->answer) 
                    bg-green-400 
                @elseif($selectedQuestionId === $question->id && $selectedOption === $question->option4 && $selectedOption !== $question->answer) 
                    bg-red-400 
                @elseif($selectedQuestionId === $question->id && $selectedOption !== $question->answer && $question->option4 === $question->answer) 
                    bg-green-400 
                @endif">
            iv.) {{ $question->option4 }}
        </button>
        @if($selectedQuestionId === $question->id)
            @if($question->option4 === $question->answer && $selectedOption !== null)
                <span class="text-green-600 ml-2">✔️</span>
            @elseif($selectedOption === $question->option4 && $selectedOption !== $question->answer)
                <span class="text-red-600 ml-2">❌</span>
            @endif
        @endif
    </div>

    <!-- Option 5 -->
    <div class="flex items-center mb-4 ml-10 mt-4">
        <button wire:click="optionSelected({{ $question->id }}, '{{ $question->option5 }}')" 
                class="border border-lightBlue hover:border-blue-400 rounded p-1
                @if($selectedQuestionId === $question->id && $selectedOption === $question->answer && $question->option5 === $question->answer) 
                    bg-green-400 
                @elseif($selectedQuestionId === $question->id && $selectedOption === $question->option5 && $selectedOption !== $question->answer) 
                    bg-red-400 
                @elseif($selectedQuestionId === $question->id && $selectedOption !== $question->answer && $question->option5 === $question->answer) 
                    bg-green-400 
                @endif">
            v.) {{ $question->option5 }}
        </button>
        @if($selectedQuestionId === $question->id)
            @if($question->option5 === $question->answer && $selectedOption !== null)
                <span class="text-green-600 ml-2">✔️</span>
            @elseif($selectedOption === $question->option5 && $selectedOption !== $question->answer)
                <span class="text-red-600 ml-2">❌</span>
            @endif
        @endif
    </div>
       
       
       {{-- <button class="border border-lightBlue hover:border-blue-400 rounded mb-4 ml-10 p-1 @if($selectedOption === 'option3') bg-green-400 @endif"> ii.) {{$question->option2}}</button><br>
       <button class="border border-lightBlue hover:border-blue-400 rounded mb-4 ml-10 p-1 @if($selectedOption === 'option3') bg-green-400 @endif"> iii.) {{$question->option3}}</button><br>
       <button class="border border-lightBlue hover:border-blue-400 rounded mb-4 ml-10 p-1 @if($selectedOption === 'option3') bg-green-400 @endif"> iv.) {{$question->option4}}</button><br>
       <button class="border border-lightBlue hover:border-blue-400 rounded mb-4 ml-10 p-1 @if($selectedOption === 'option3') bg-green-400 @endif">  v.) {{$question->option5}}</button><br> --}}



       {{-- <label><input type="radio" name="question_{{ $question->id }}" value="{{$question->option1}}"> {{$question->option1}}</label><br>
       <label><input type="radio" name="question_{{ $question->id }}" value="{{$question->option2}}"> {{$question->option2}}</label><br>
       <label><input type="radio" name="question_{{ $question->id }}" value="{{$question->option3}}"> {{$question->option3}}</label><br>
       <label><input type="radio" name="question_{{ $question->id }}" value="{{$question->option4}}"> {{$question->option4}}</label><br>
       <label><input type="radio" name="question_{{ $question->id }}" value="{{$question->option5}}"> {{$question->option5}}</label><br> --}}
       
       <!-- Break between questions -->
       <br>
    </div>
    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
