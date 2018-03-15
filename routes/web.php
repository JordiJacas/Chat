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

//Denuncias

Route::post('denuncia', 'DenunciasController@store');

Route::get('denuncia', 'ChatController@getDenuncia')->name('denuncia');

Route::post('storage/create', 'DenunciasController@save');

Route::post('respuesta_denuncia','RespuestaController@store');

//Debates

Route::get('debate', 'ChatController@getDebate')->name('debate');

//Sesion

Route::get('iSession', 'ChatController@getSession')->name('iSession');

//Noticias

Route::get('noticia', 'ChatController@getNoticia')->name('noticia');

Route::post('noticia', 'NoticiasController@store');

//Mensaje

Route::get('chat', 'ChatController@getChat')->name('chat');

Route::post('chat', 'MensajeController@store');

Route::post('storage/create', 'MensajeController@save');

//Editar Noticias

Route::get('editarNoticia/{id}', 'NoticiasController@getEditar');

Route::get('actualizar/{id}', 'NoticiasController@update');
