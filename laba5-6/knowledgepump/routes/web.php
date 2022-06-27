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

Route::get('/', 'App\Http\Controllers\MainController@home');
Route::get('/contacts', 'App\Http\Controllers\MainController@contacts');
Route::get('/Directions', 'App\Http\Controllers\MainController@Directions');
Route::get('/about', 'App\Http\Controllers\MainController@about');
Route::get('/client', 'App\Http\Controllers\MainController@client');

Route::get('/client', 'App\Http\Controllers\MainController@client')->name('client');
Route::post('/client/check', 'App\Http\Controllers\MainController@client_check');