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

Route::get('/','ChatController@getWelcome')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('denuncia', 'DenunciasController@store');
Route::get('denuncia', 'ChatController@getDenuncia')->name('denuncia');

Route::get('debate', 'ChatController@getDebate')->name('debate');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
