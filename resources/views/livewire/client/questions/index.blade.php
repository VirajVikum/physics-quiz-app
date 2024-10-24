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
       <button wire:click="optionSelected('{{$question->option1}}')" class="border border-lightBlue hover:border-blue-400 rounded mb-4 ml-10 mt-4 p-1 @if($selectedOption == $question->answer) bg-green-400 @endif"> i.) {{$question->option1}}</button> <br>
       <button class="border border-lightBlue hover:border-blue-400 rounded mb-4 ml-10 p-1 @if($selectedOption === 'option3') bg-green-400 @endif"> ii.) {{$question->option2}}</button><br>
       <button class="border border-lightBlue hover:border-blue-400 rounded mb-4 ml-10 p-1 @if($selectedOption === 'option3') bg-green-400 @endif"> iii.) {{$question->option3}}</button><br>
       <button class="border border-lightBlue hover:border-blue-400 rounded mb-4 ml-10 p-1 @if($selectedOption === 'option3') bg-green-400 @endif"> iv.) {{$question->option4}}</button><br>
       <button class="border border-lightBlue hover:border-blue-400 rounded mb-4 ml-10 p-1 @if($selectedOption === 'option3') bg-green-400 @endif">  v.) {{$question->option5}}</button><br>
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
