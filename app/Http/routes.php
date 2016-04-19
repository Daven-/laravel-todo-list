<!--
@Author: Daven
@Date:   2016-04-19T09:41:41-07:00
@Email:  daven1919@gmail.com
@Last modified by:   Daven
@Last modified time: 2016-04-19T12:10:00-07:00
-->



<?php

use App\Task;
use Illuminate\Http\Request;

/**
 * Show Task Dashboard
 */
Route::get('/', function () {
  $tasks = Task::orderBy('created_at', 'asc')->get();

  return view('tasks', [
      'tasks' => $tasks
  ]);
});

/**
 * Add New Task
 */
Route::post('/task', function (Request $request) {
  $validator = Validator::make($request->all(), [
      'name' => 'required|max:255',
  ]);

  if ($validator->fails()) {
      return redirect('/')
          ->withInput()
          ->withErrors($validator);
  }

  // if validation succeeded continue to create the task
  $task = new Task;
      $task->name = $request->name;
      $task->save();

      return redirect('/');
});

/**
 * Delete Task
 */
Route::delete('/task/{task}', function (Task $task) {
  $task->delete();

return redirect('/');
});
