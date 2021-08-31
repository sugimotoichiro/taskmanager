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
       <h1>Task Management</h1>
              <div class ="edit">
                    <p class ="edit">[<a href ="/tasks/{{ $task->id }}/edit">edit</a>]</p>
              </div>
              <div class ="task">
                   <h2 class="title">{{ $task->title }}</h2>
                   <p　class="body">{{ $task ->body }}</p>
                   <p　class="updated_at">{{ $task ->updated_at }}</p>
              </div>
              <div class="back">
                  <a href= "/">back</a>
              </div>
    </body>
</html>
