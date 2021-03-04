<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::post('login', 'api\UsersController@login');
Route::post('register', 'api\UsersController@register');

Route::middleware('apiauthficate')->group(function () {
    Route::get('usuarios', 'api\UsersController@getAllUsers');
    Route::get('usuarios/{id}', 'api\UsersController@getUser');
    Route::put('usuarios/{id}', 'api\UsersController@updateUser');
    Route::delete('usuarios/{id}','api\UsersController@deleteUser');
});