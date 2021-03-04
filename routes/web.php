<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\web\LoginController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\TrabalhosController;
use App\Http\Controllers\web\ConteudosController;
use App\Http\Controllers\web\AvaliacoesController;
use App\Http\Controllers\web\UsuariosController;

Route::match(['get', 'post'], '/', 'web\LoginController@login');

Route::middleware('webauthficate:all')->group(function () {
    Route::get('/home', 'web\HomeController@home');
    Route::get('/trabalhos', 'web\TrabalhosController@home');
    Route::get('/conteudos', 'web\ConteudosController@home');
    Route::get('/avaliacoes', 'web\AvaliacoesController@home');
    Route::get('/logout', 'web\LoginController@logout');
});

Route::middleware('webauthficate:admin')->group(function () {
    Route::get('/usuarios', 'web\UsuariosController@home');
});