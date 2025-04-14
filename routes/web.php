<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/categories", "App\Http\Controllers\CategoryController@index");
Route::get("/categories/create", "App\Http\Controllers\CategoryController@create");

Route::post("/categories/store", "App\Http\Controllers\CategoryController@store");

Route::get('/students', 'App\Http\Controllers\StudentController@index');
Route::get('/students/create', 'App\Http\Controllers\StudentController@create');
Route::get('/students/{id}', 'App\Http\Controllers\StudentController@edit');
Route::put('/students/{id}', 'App\Http\Controllers\StudentController@update');


Route::get('/guardians', 'App\Http\Controllers\GuardianController@index');
Route::get('/guardians/create', 'App\Http\Controllers\GuardianController@create');
Route::get('/guardians/{id}', 'App\Http\Controllers\GuardianController@edit');
Route::put('/guardians/{id}', 'App\Http\Controllers\GuardianController@update');