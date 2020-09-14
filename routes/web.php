<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// função padrão do laravel
Route::get('/', 'ContatoController@index');

// rota adicionada
Route::post('/enviar', 'ContatoController@enviar');

// rota adicionada para listar as mensagens enviadas
Route::get('/lista', 'ContatoController@lista')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


