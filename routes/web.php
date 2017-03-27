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

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix' => 'usuarios'], function() {
  /*Route::get('/registro', 'ParticipantController@registerView')->name('registerView');*/

  Route::get('/registro', 'ParticipantController@updateCitiesView')->name('updateCitiesView');

  Route::post('/registro', 'ParticipantController@registerForm')->name('registerSubmit');

  
  Route::get('/participante', 'ParticipantController@participantView')->name('participantView');

  Route::get('/participanteActualizar/{id}', 'ParticipantController@participantUpdateView')->name('participantUpdateView');

   Route::post('/participanteActualizar/{id}', 'ParticipantController@participantUpdate')->name('participantUpdate');

   Route::delete('/participanteEliminar/{id}', 'ParticipantController@participantDelete')->name('participantDelete');
  
});


