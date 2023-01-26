<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title></title>
</head>
<body>
        
        <nav class="w-full bg-slate-500">
              
              @if(Auth::check())
              
              <form class="mt-5 -mb-3" method="POST" action="/logout">
                @csrf
                
                <a class="text-white text-3xl ml-2 pt-2 mt-2" id="sign-in-btn"  href="/acc">My Quizzes</a>
                <a class="text-3xl text-white ml-[45rem]" type="button" href='/create'>Create Quiz</a>
                <button class="text-3xl absolute right-3" type='submit' id="register-btn" >Log out</button>
                <div class="text-center pb-2 text-white m-1">
                  @if ($hasQuiz)
                
                  <a type="button" href='/create-question'>Create Question</a>
              
                  @endif
                </div>
              
              </form>
              @else
              <form class="mt-3 min-h-[5rem] -mb-3 text-center">
                <a class="text-white text-3xl ml-2 pt-2 mt-2" id="login-btn"  href="/login">Login</a>
                <a class="text-white text-3xl ml-2 pt-2 mt-2" id="register-btn"  href="/register">Register</a>
              </form>
              @endif


        </nav>
            
    
       <div>
        @foreach($quizzes as $quiz)
          <div >
            <a href="/quiz/{{ $quiz->id }}"><div class="mdiv"></a>
              <a href="/quiz/{{ $quiz->id }}"><img src="{{ $quiz->img }}"  alt="Card image cap"></a>
              <div>
                <a class="font-bold" href="/quiz/{{ $quiz->id }}">{{ $quiz->title }}</a>
                <p>{{ $quiz->desc }}</p>
              </div>
              <div >
                <small >Questions: {{ $questions->where('quiz_id', $quiz->id)->count() }}</small>
              </div>
            </div>
            @endforeach
       </div>
      </main>
      <footer>
      </footer>
</body>
</html>
