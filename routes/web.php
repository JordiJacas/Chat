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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ChatController@getWelcome');

Auth::routes();

Route::get('/', 'ChatController@getWelcome');

Route::get('denuncia', 'ChatController@getDenuncia');

Route::post('denuncia', 'DenunciasController@store');

Route::get('debate', 'ChatController@getDebate');

Route::get('login', 'ChatController@getLogin');

