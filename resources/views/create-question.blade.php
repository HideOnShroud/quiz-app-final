<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
          <div class="mdiv min-w-[50rem] min-h-[40rem] text-xl bold">

            <label for="quizId">QuizId</label>
            <select class="rounded-lg max-h-10  " id="quizId" name="quiz_id">
                @foreach ($quizzes as $quiz)
                    <option value="{{ $quiz->id }}">{{ $quiz->title }}</option>
                @endforeach
            </select>

            <label class="pt-6 -pb-8" for="quizImg">Image</label>
            <input class="rounded-lg max-h-10  " name="img" type="text" class="form-control" id="quizImg">

            <label class="pt-6 -pb-8" for="quizQuestion">Question</label>
            <input class="rounded-lg max-h-10  " name="question" type="text" class="form-control" id="quizQuestion">

            <label class="pt-6 -pb-8" for="quizAnswer1"> Answer1</label>
            <textarea class="rounded-lg max-h-10  " name="answer1" class="form-control" id="quizAnswer1" ></textarea>

            <label class="pt-6 -pb-8" for="quizAnswer2"> Answer2</label>
            <textarea class="rounded-lg max-h-10  " name="answer2" class="form-control" id="quizAnswer2" ></textarea>

            <label class="pt-6 -pb-8" for="quizAnswer3"> Answer3</label>
            <textarea class="rounded-lg max-h-10  " name="answer3" class="form-control" id="quizAnswer3" ></textarea>

            <label class="pt-6 -pb-8" for="quizAnswer4"> Answer4</label>
            <textarea class="rounded-lg max-h-10  " name="answer4" class="form-control" id="quizAnswer4" ></textarea>

            <label class="pt-6 -pb-8" for="quizCorrectAnswer"> Correct Answer</label>
            <textarea class="rounded-lg max-h-10  " name="correct_answer" class="form-control" id="quizCorrectAnswer" ></textarea>

            <label class="pt-6 -pb-8" for="quizPosition"> Position</label>
            <textarea class="rounded-lg max-h-10  " name="position" class="form-control" id="quizPosition" ></textarea>
            
            <button class="button max-h-5" type="submit" >Finish</button>
          </div>
        </form>
    
</body>
</html>