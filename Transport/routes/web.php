<?php

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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource('usuarios','UserController')->middleware('auth');
Route::resource('propietarios','PropietarioController')->middleware('auth');
Route::resource('conductores','ConductorController')->middleware('auth');
Route::resource('vehiculos','VehiculoController')->middleware('auth');
Route::resource('reports','ReportController')->middleware('auth');
