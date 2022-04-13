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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'AudiController@index');

Route::get('/players', 'PlayerController@index');

Route::get('/players/{player}', 'PlayerController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
