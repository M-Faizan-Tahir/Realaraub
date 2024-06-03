<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/add_user', 'App\Http\Controllers\centralController@add_user');
Route::post('/add_products', 'App\Http\Controllers\centralController@add_products');
Route::post('/punch_order', 'App\Http\Controllers\centralController@punch_order');