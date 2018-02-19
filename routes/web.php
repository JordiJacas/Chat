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

//Denuncias

Route::post('denuncia', 'DenunciasController@store');

Route::get('denuncia', 'ChatController@getDenuncia')->name('denuncia');

Route::post('storage/create', 'DenunciasController@save');

//Debates

Route::get('debate', 'ChatController@getDebate')->name('debate');

//Sesion

Route::get('iSession', 'ChatController@getSession')->name('iSession');

//Noticias

Route::get('noticia', 'ChatController@getNoticia')->name('noticia');

Route::post('noticia', 'NoticiasController@store');

//Chat

Route::get('chat', 'ChatController@getChat')->name('chat');

Route::post('chat', 'ChatController@store');

Route::post('storage/create', 'ChatroomController@save');