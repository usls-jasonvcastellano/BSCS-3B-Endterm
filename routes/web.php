<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/inventory', 'App\Http\Controllers\InventoryController@index');

Route:: get('/inventory/create', 'App\Http\Controllers\InventoryController@create');

Route:: get('/login', 'App\Http\Controllers\LoginController@index');
Route:: get('/categories', 'App\Http\Controllers\CategoryController@index');
