<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', 'TasksController@index');
Route::post('/tasks/{task}', 'TasksController@store');
Route::post('/tasks/{task}', 'TasksController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
