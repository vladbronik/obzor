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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    $tasks = [
        'add',
        'find',
        'review'
    ];
    return view('hello',compact('tasks'));
});

/*Route::get('tasks', function () {
    //$tasks = DB::table('task')->get();
    $tasks = App\Task::incomplete();
    return view('tasks.tasks', compact('tasks'));
});

Route::get('tasks/{task}', function ($id) {
    //$task = DB::table('task')->find($id);
    $task = App\tasks::find($id);
    return view('tasks.show', compact('task'));
});*/

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
Route::get('/', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');