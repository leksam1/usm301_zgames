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

Route::view("/","home")->name("home");
Route::view("/ver_consolas","ver_cosolas")->name("ver_consolas");
Route::view("/ver_juegos","ver_juegos")->name("ver_juegos");
Route::view("/agregar_juegos","agregar_juegos")->name("agregar_juegos")