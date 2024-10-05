<div>
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
