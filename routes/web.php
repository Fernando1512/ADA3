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

Route::get('/', function () {    return view('inicio');});
//Route:: view('/', 'inicio')→name('inicio');

//Route :: post('/', 'MessagesController@store');
//[MessagesController::class, 'store']
Route :: post('inicio', [MessagesController::class, 'store'])->name('m.store');
