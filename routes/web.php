<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrabalhosController;
use App\Http\Controllers\ConteudosController;
use App\Http\Controllers\AvaliacoesController;
use App\Http\Controllers\UsuariosController;

/*
|--------------------------------------------------------------------------
| Web Routes - Login
|--------------------------------------------------------------------------
*/

Route::match(['get', 'post'], '/', 'LoginController@auth');

/*
|--------------------------------------------------------------------------
| Web Routes - Home
|--------------------------------------------------------------------------
*/

Route::get('/home', 'HomeController@home');

/*
|--------------------------------------------------------------------------
| Web Routes - Trabalhos
|--------------------------------------------------------------------------
*/

Route::get('/trabalhos', 'TrabalhosController@list');

/*
|--------------------------------------------------------------------------
| Web Routes - Conteudos
|--------------------------------------------------------------------------
*/

Route::get('/conteudos', 'ConteudosController@list');

/*
|--------------------------------------------------------------------------
| Web Routes - Avaliações
|--------------------------------------------------------------------------
*/

Route::get('/avaliacoes', 'AvaliacoesController@list');

/*
|--------------------------------------------------------------------------
| Web Routes - Usuarios
|--------------------------------------------------------------------------
*/

Route::get('/usuarios', 'UsuariosController@list');