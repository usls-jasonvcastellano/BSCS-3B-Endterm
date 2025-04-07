<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'App\Http\Controllers\LoginController@index');

Route::get('/categories', 'App\Http\Controllers\CategoriesController@index');
Route::post('/categories', 'App\Http\Controllers\CategoriesController@store');
Route::get('/categories/create', 'App\Http\Controllers\CategoriesController@create');

Route::get('/inventory', 'App\Http\Controllers\InventoryController@index');

Route::get('/hello', 'App\Http\Controllers\HelloController@index');

Route::get('/items', 'App\Http\Controllers\ItemsController@index');
Route::post('/items', 'App\Http\Controllers\ItemsController@store');
Route::get('/items/create', 'App\Http\Controllers\ItemsController@create');