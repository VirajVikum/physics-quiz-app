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
       <h1>{{ $loop->iteration }}. {{ $question->question }}</h1> <!-- Question number -->

       <!-- Radio buttons with text on the right -->
       <label><input type="radio" name="question_{{ $question->id }}" value="{{$question->option1}}"> {{$question->option1}}</label><br>
       <label><input type="radio" name="question_{{ $question->id }}" value="{{$question->option2}}"> {{$question->option2}}</label><br>
       <label><input type="radio" name="question_{{ $question->id }}" value="{{$question->option3}}"> {{$question->option3}}</label><br>
       <label><input type="radio" name="question_{{ $question->id }}" value="{{$question->option4}}"> {{$question->option4}}</label><br>
       <label><input type="radio" name="question_{{ $question->id }}" value="{{$question->option5}}"> {{$question->option5}}</label><br>
       
       <!-- Break between questions -->
       <br>
    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
