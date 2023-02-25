<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/user/create', 'App\Http\Controllers\UserController@create');
Route::get('/users', 'App\Http\Controllers\UserController@list');
Route::delete('/user/{id}', 'App\Http\Controllers\UserController@delete');

Route::post('/task/create', 'App\Http\Controllers\TaskController@create');
Route::get('/tasks', 'App\Http\Controllers\TaskController@list');
Route::delete('/task/{id}', 'App\Http\Controllers\TaskController@delete');
Route::put('/task/{id}', 'App\Http\Controllers\TaskController@update');