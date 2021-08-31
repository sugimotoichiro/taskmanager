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
       <h1>Blog Name</h1>
            <form action = "/tasks/{{ $task->id }}" method="task" >
                @csrf
                @method("PUT")
                <div class ="title">
                    <h2>タスク名</h2>
                    <input type="text" name="task[title]" value="{{old($task->title)}}"/>
                    <p class="title_error" style="color:red">{{$errors->first("task.title")}}</p>
                </div>
                <div class ="body">
                    <h2>タスク内容</h2>
                    <textarea type="text" name="task[body]" >{{old($task->body) }}</textarea>
                    <p class="body_error" style="color:red">{{($errors->first("task.body"))}}</p>
                <div class ="timelimit">
                    <h2>タスク期限</h2>
                    <input type="date" name="task[timelimit]" placeholder="〇月〇日" value="{{old($task->timelimit)}}"/>
                    <p class ="body_error" style="color:red">{{$errors->first("task.timelimit")}}</p>    
                </div>
                <input type="submit" value="update">
            </form>
            <div class="back">
                  <a href= "/tasks/{{ $task->id }}">back</a>
            </div>
    </body>
</html>
