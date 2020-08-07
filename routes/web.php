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

Route::get('/', function () {
    return view('dashboard.index');
});

Route::resource('computers','ComputersController');
Route::resource('printers','PrintersController');
Route::resource('routers','RoutersController');
Route::resource('servers','ServersController');
Route::resource('switches','SwitchesController');

