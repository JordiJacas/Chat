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

Route::post('/','CategoriasController@store');

Auth::routes();
Route::get('/home', 'ChatController@getWelcome');

Route::get('denuncia', 'ChatController@getDenuncia')->name('denuncia');

Route::get('debate', 'ChatController@getDebate')->name('debate');

Route::get('iSession', 'ChatController@getSession')->name('iSession');

Route::get('noticia', 'NoticiasController@Index')->name('noticia');

Route::post('storage/create', 'DenunciasController@save');

Route::get('chat', 'ChatController@getChat')->name('chat');

Route::post('noticia', 'NoticiasController@store');

Route::post('denuncia', 'DenunciasController@store');
