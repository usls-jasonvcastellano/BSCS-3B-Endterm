<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route:: get('/item', 'App\Http\Controllers\ItemController@index');
Route:: get('/login', 'App\Http\Controllers\LoginController@index');

Route:: get('/aboutme', 'App\Http\Controllers\AboutmeController@index');

Route:: get('/hello', 'App\Http\Controllers\HelloController@index');
Route:: get('/inventory', 'App\Http\Controllers\InventoryController@index');