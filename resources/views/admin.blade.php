<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    {{-- Regular user Side --}}
    @if(Auth::id() !== 1)
        <div>
        @foreach($curQuizzes as $quiz)
                <div class="mdiv min-w-[50rem]">
                    <h3 class="text-3xl">Quiz: {{$quiz->title}}</h5>
                    <p >{{$quiz->desc}}</p>
    
                    <div>
                        <a href="/edit-quiz/{{$quiz->id}}"><button>Edit</button></a>
                        <form action="/delete-quiz/{{$quiz->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="bg-red-900" type="submit" >Delete</button>
                        </form>
                    </div>
                    <div>
                        <h4>Question</h3>
                        @foreach ($curQuestions->where('quiz_id', $quiz->id) as $question)
                        <h5 >{{$question->question}}</h5>
                        <div>
                            <a href="/edit-question/{{$question->id}}"><button>Edit</button></a>
                            <form action="/question/{{ $question->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="bg-red-900" type="submit">Delete</button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
        @endforeach
        </div>

    {{-- Admin side --}}
    @else
        {{-- Admin quizzes --}}

            @foreach($curQuizzes as $quiz)
                    <div class="mdiv min-w-[50rem]">
                        <h3 class="text-3xl">Quiz: {{$quiz->title}}</h5>
                        <p >{{$quiz->desc}}</p>
        
                        <div>
                            <a href="/edit-quiz/{{$quiz->id}}"><button>Edit</button></a>
                            <form action="/delete-quiz/{{$quiz->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="bg-red-900" type="submit" >Delete</button>
                            </form>
                        </div>
                        <div>
                            <h4>Question</h3>
                            @foreach ($curQuestions->where('quiz_id', $quiz->id) as $question)
                            <h5 >{{$question->question}}</h5>
                            <div>
                                <a href="/edit-question/{{$question->id}}"><button>Edit</button></a>
                                <form action="/question/{{ $question->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="bg-red-900" type="submit">Delete</button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
            @endforeach
        
        @foreach($quizzes as $quiz)
            
            {{-- Approved --}}
            @if($quiz->approved && $quiz->user_id!=1 )
            <div class="mdiv min-w-[50rem]" id='hide-quiz'>
                    <h2 class="text-4xl bold">Quiz</h2>

                            <h3 class="text-3xl"> Quiz: {{$quiz->title}}</h5>
                            <p>{{$quiz->desc}}</p>
                                <form action="/delete-quiz/{{$quiz->id}}" method="POST">
                                    @csrf
                                    <button class="bg-red-900" type="submit">Delete</button>
                                </form>
                                <h2 class="text-3xl bold">Questions</h2>
                                @foreach($questions as $question)
                                @if ($question->quiz_id==$quiz->id)
                                
                                <h5 >{{$question->question}}</h5>
                                
                                
                                <form action="/question/{{ $question->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-red-900" type="submit">Delete</button>
                                </form>
                                
                                @endif
                                @endforeach
                            </div>
                                @endif
                                @endforeach

                    <h2 class="text-white pt-2"> Wating for approval </h2>
                    @foreach($quizzes->where('approved', 0) as $quiz)

                        <div class="mdiv min-w-[50rem]">
                                <h5 class="text-3xl">{{$quiz->title}}</h5>
                                <p >{{$quiz->desc}}</p>

                                    <form action="/approve/{{$quiz->id}}" method="POST">
                                        @csrf
                                        @method('patch')
                                        <button class="bg-green-900" type="submit" >Approve</button>
                                    </form>
                                    <form action="/delete-quiz/{{$quiz->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="bg-red-900" type="submit" >Delete</button>
                                    </form>
                        
                                    
                                    @foreach($questions as $question)
                                        @if ($question->quiz_id==$quiz->id)
                                            
                                        <h5 >{{$question->question}}</h5>
                                        
                                        
                                        <form action="/question/{{ $question->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="bg-red-900" type="submit">Delete</button>
                                        </form>
                                        
                                        @endif
                                    @endforeach
                                    
                        </div>
                    @endforeach
                    
    @endif   

</body>
</html>