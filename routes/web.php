<?php

namespace App\Http\Controllers;
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



Route::get('/create','App\Http\Controllers\EmpresaController@create');


*/

Route::get('/','App\Http\Controllers\UsuarioController@index');
Route::resource('/usuario', UsuarioController::class);
Route::resource('/empresa', EmpresaController::class);
