<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
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

Route::view('/','index');

Route::post('/enviar',[UsuarioController::class,'create']);

Route::get('/ver-pessoa/{id}',[UsuarioController::class,'read']);

Route::get('/editar/{id}',[UsuarioController::class,'editarGet']);

Route::post('/editar/{id}',[UsuarioController::class,'editarSet']);

Route::get('/deletar/{id}',[UsuarioController::class,'deletar']);

Route::get('/vertodos',[UsuarioController::class,'verTodos']);
