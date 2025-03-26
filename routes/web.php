<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: '/login', action:'App\Http\Controllers\LoginController@index');

Route::get(uri: '/item', action:'App\Http\Controllers\ItemController@index');

Route::get(uri: '/form', action:'App\Http\Controllers\FormController@index');

Route::get(uri: '/hello', action:'App\Http\Controllers\HelloController@index');

Route::get(uri: '/category', action:'App\Http\Controllers\CategoryController@index');

Route::get(uri: '/DeligeroLyncolin', action:'App\Http\Controllers\LaravelInfoController@index');