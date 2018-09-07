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

use App\Task;

Route::get('/tasks', function () {
    #$tasks = DB::table('tasks')->get();
    $tasks = Task::all();
    #return $tasks;
    return view('tasks.index')->with( compact('tasks') );
});


Route::get('/task/{task}', function($id){
    #$task = DB::table('tasks')->find($id);
    $task = Task::find($id);
    #$task = Task::whereKey($id);
    #return $task;
    return view('tasks.show')->with( compact('task') );
    #return view('about');
});




