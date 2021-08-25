<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index(Task $task)
    {
        return view("index")->with(["tasks" => $task->getPaginateByLimit(5)]);
    }
    public function show(Task $task)
    {
        return view("show")->with(["task" => $task]);
    }
    public function create()
    {
        return view("create");
    }
    public function store(Task $task, TaskRequest $request)
    {
        $input = $request["task"];
        $task->fill($input)->save();//クライアント側からのデータを空のtask インスタンスに保存する。
        return redirect('/tasks/' . $task->id);//URLの変更
    }
    public function edit(Task $task)
    {
        return view("edit")->with([ "task"=> $task] );
    }
    public function update(Task $task, TaskRequest $request)
    {
        $input = $request["task"];
        $task->fill($input)->save();
        return redirect("/tasks/". $task->id);
    }
}

