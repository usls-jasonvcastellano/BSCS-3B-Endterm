<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/inventory', 'App\Http\Controllers\InventoryController@index');

Route:: get('/inventory/create', 'App\Http\Controllers\InventoryController@create');

Route:: get('/login', 'App\Http\Controllers\LoginController@index');
Route:: get('/categories', 'App\Http\Controllers\CategoryController@index');


// Actions for Categories
Route::get('/categories/create', 'App\Http\Controllers\CategoryController@create');
Route::post('/categories/store', 'App\Http\Controllers\CategoryController@store');
Route::delete('/categories/{id}', 'App\Http\Controllers\CategoryController@destroy');

// Actions for Items
Route::get('/inventory/create', 'App\Http\Controllers\InventoryController@create')->name('items.create');
Route::post('/inventory/store', 'App\Http\Controllers\InventoryController@store');
Route::delete('/inventory/{id}', 'App\Http\Controllers\InventoryController@destroy');