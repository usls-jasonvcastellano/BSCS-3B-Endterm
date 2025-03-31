<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Midterm
Route:: get('/AranteIradJoseph', 'App\Http\Controllers\FeatureController@index');

//Endterm
Route:: get('/categories', 'App\Http\Controllers\CategoriesController@index');
Route:: get('/categories/create', 'App\Http\Controllers\CategoriesController@create');
Route:: post('/categories/store', 'App\Http\Controllers\CategoriesController@store');