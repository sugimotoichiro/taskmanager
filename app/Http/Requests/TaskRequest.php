<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
 public function rules()
    {
        return [
            "task.title" => "required|string|max:100",
            "task.body" => "required|string|max:4000",
            ];
    }
}

