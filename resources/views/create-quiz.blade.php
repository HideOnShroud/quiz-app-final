<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <form action="/" method="POST">
      @csrf
        <div class="mdiv min-w-[50rem] min-h-[40rem] text-xl bold">
          
            <label class="pt-6 -pb-8" for="quizImg">Image</label>
            <input class="rounded-lg max-h-10  " name="img" type="text" class="form-control" id="quizImg">
          
            <label class="pt-6 -pb-8" for="quizTitle">Title</label>
            <input class="rounded-lg max-h-10  " name="title" type="text" class="form-control" id="quizTitle">
          
            <label class="pt-6 -pb-8" for="quizDesc"> Description</label>
            <textarea class="rounded-lg " name="desc" class="form-control" id="quizDesc" rows="3"></textarea>
          
            <button class="button" type="submit" >Submit</button>

        </div>
    </form>
</body>
</html>