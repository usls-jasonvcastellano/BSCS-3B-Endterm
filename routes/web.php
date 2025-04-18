<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'App\Http\Controllers\LoginController@index');

Route::get('/inventory', 'App\Http\Controllers\InventoryController@index');

Route::get('/create', 'App\Http\Controllers\InventoryController@create');

Route::get('/hello', 'App\Http\Controllers\HelloController@index');

Route::get('/categories', 'App\Http\Controllers\CategoryController@index');
Route::post('/categories', 'App\Http\Controllers\CategoryController@store');
Route::get('/categories/create', 'App\Http\Controllers\CategoryController@create');
Route::put('/categories/{id}', 'App\Http\Controllers\CategoryController@update'); // Update
Route::get('/categories/{id}/edit', 'App\Http\Controllers\CategoryController@show'); // Show edit page

Route::get('/items', 'App\Http\Controllers\ItemController@index');
Route::post('/items', 'App\Http\Controllers\ItemController@store');
Route::get('/items/create', 'App\Http\Controllers\ItemController@create');
Route::put('/items/{id}', 'App\Http\Controllers\ItemController@update'); // Update
Route::get('/items/{id}/edit', 'App\Http\Controllers\ItemController@show'); // Show