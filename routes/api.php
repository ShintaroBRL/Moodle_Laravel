<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::post('login', 'UsersController@login');
Route::post('register', 'UsersController@register');

Route::middleware('authficate')->group(function () {
    Route::get('usuarios', 'UsersController@getAllUsers');
    Route::get('usuarios/{id}', 'UsersController@getUser');
    Route::put('usuarios/{id}', 'UsersController@updateUser');
    Route::delete('usuarios/{id}','UsersController@deleteUser');
});