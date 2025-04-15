<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Midterm
Route::get('/AranteIradJoseph', 'App\Http\Controllers\FeatureController@index');

// Endterm
Route::get('/categories', 'App\Http\Controllers\CategoriesController@index');
Route::get('/items', 'App\Http\Controllers\ItemsController@index');

// Actions for Categories
Route::get('/categories/create', 'App\Http\Controllers\CategoriesController@create');
Route::post('/categories/store', 'App\Http\Controllers\CategoriesController@store');
Route::delete('/categories/{id}', 'App\Http\Controllers\CategoriesController@destroy');
Route::get('/categories/{id}/edit', 'App\Http\Controllers\CategoriesController@edit')->name('categories.edit');
Route::put('/categories/{id}', 'App\Http\Controllers\CategoriesController@update')->name('categories.update');

// Actions for Items
Route::get('/items/create', 'App\Http\Controllers\ItemsController@create')->name('items.create');
Route::post('/items/store', 'App\Http\Controllers\ItemsController@store');
Route::delete('/items/{id}', 'App\Http\Controllers\ItemsController@destroy');
Route::get('/items/{id}/edit', 'App\Http\Controllers\ItemsController@edit')->name('items.edit');
Route::put('/items/{id}', 'App\Http\Controllers\ItemsController@update')->name('items.update');