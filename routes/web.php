<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/categories", "App\Http\Controllers\CategoryController@index");
Route::get("/categories/create", "App\Http\Controllers\CategoryController@create");

Route::post("/categories/store", "App\Http\Controllers\CategoryController@store");