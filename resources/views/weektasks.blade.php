<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    
    <body>
       <h1>今週のタスク</h1>
            <p class="create">
            <a href ="/tasks/create">create</a>  
            </p>
       <div class="tasks">
           @foreach($tasks as $task)
               <div class ="task">
                   <a href ="/tasks/{{$task->id}}">
                   <h2 class="title">{{ $task->title }}</h2>
                   </a>
                   <p　class="body">{{ $task ->body }}</p>
                   <p  class="timelimit">{{ $task ->timelimit }}</p>
                   <p  class="checkbox">OK!
                        <input type="checkbox" name="OK" value="OKtask">
                   </p>
               </div>
           @endforeach
        </div>
        <div class='paginate'>
            {{ $tasks->links() }}
        </div>
    </body>
</html>
