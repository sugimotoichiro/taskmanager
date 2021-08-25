<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/tasks/{task}/edit", "TaskController@edit");
Route::get("/tasks/create", "TaskController@create");
Route::get('/tasks/{task}', 'TaskController@show');
Route::get('/', 'TaskController@index');

Route::post("/tasks", "TaskController@store");

Route::put("/tasks/{task}", "TaskController@update");