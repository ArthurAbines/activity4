<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', "App\Http\Controllers\UserController@index");
Route::post('/create-user', "App\Http\Controllers\UserController@store");
Route::get('/Search/{id}', "App\Http\Controllers\Search@displayUser");
Route::get('/update/{id}', "App\Http\Controllers\UpdateUserController@updateForm");
Route::put('/update-user/{id}', "App\Http\Controllers\UpdateUserController@update");
