<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', [
    'uses' => 'PagesController@new'
]);

Route::get('/todos', [
    'uses' => 'TodosController@index',
    'as' =>'todos'
]);

Route::get('/todo/delete/{id}', [
    'uses' => 'TodosController@delete',
    'as' => 'todo.delete'
]);

Route::get('/todo/update/{id}', [
    'uses' => 'TodosController@update',
    'as' => 'todo.update'
]);

Route::post('/todo/save/{id}', [
    'uses' => 'TodosController@save',
    'as' => 'todos.save'
]);
Route::get('/todo/completed/{id}', [
    'uses' => 'TodosController@completed',
    'as' => 'todo.completed'
]);



Route::post('/create/todo', [
    'uses' => 'TodosController@store'
]);