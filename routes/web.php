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

Route::get('/items', 'App\Http\Controllers\ItemController@index');
Route::post('/items', 'App\Http\Controllers\ItemController@store');
Route::get('/items/create', 'App\Http\Controllers\ItemController@create');