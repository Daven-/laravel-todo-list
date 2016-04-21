<!--
@Author: Daven
@Date:   2016-04-19T09:41:41-07:00
@Email:  daven1919@gmail.com
@Last modified by:   Daven
@Last modified time: 2016-04-19T12:10:00-07:00
-->



<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');
    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');
    Route::auth();
});
