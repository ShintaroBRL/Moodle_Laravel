<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('usuarios', 'UsersController@getAllUsers');
Route::get('usuarios/{id}', 'UsersController@getUser');
Route::post('usuarios', 'UsersController@createUser');
Route::post('authuser', 'UsersController@authuser');
Route::put('usuarios/{id}', 'UsersController@updateUser');
Route::delete('usuarios/{id}','UsersController@deleteUser');
