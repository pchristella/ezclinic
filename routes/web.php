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
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['auth', 'admin']], function() {

  Route::get('/availability', 'AvailabilitiesController@index');
  Route::get('/availability/create', 'AvailabilitiesController@create');
  Route::post('/availability', 'AvailabilitiesController@store');
  Route::get('/availability/{availability}', 'AvailabilitiesController@show');
  Route::get('/availability/{availability}/edit', 'AvailabilitiesController@edit');
  Route::patch('/availability/{availability}', 'AvailabilitiesController@update');
  Route::delete('/availability/{availability}/delete', 'AvailabilitiesController@destroy');

  // Route::get('/admindashboard', 'HomeController@admindashboard');

  Route::get('/symptom/checker', 'SymptomsController@symptom');

    Route::get('/symptom', 'SymptomsController@index');
    Route::get('/symptom/create', 'SymptomsController@create');
    Route::post('/symptom', 'SymptomsController@store');
    Route::get('/symptom/{symptom}', 'SymptomsController@show');
    Route::get('/symptom/{symptom}/edit', 'SymptomsController@edit');
    Route::patch('/symptom/{symptom}', 'SymptomsController@update');
    Route::delete('/symptom/{symptom}/delete', 'SymptomsController@destroy');

    Route::get('/event', 'EventsController@index');
    Route::get('/event/create', 'EventsController@create');
    Route::post('/event', 'EventsController@store');
    Route::get('/event/{event}', 'EventsController@show');
    Route::get('/event/{event}/edit', 'EventsController@edit');
    Route::patch('/event/{event}', 'EventsController@update');
    Route::delete('/event/{event}/delete', 'EventsController@destroy');

    Route::get('/announcement', 'AnnouncementsController@index');
    Route::get('/announcement/create', 'AnnouncementsController@create');
    Route::post('/announcement', 'AnnouncementsController@store');
    Route::get('/announcement/{announcement}', 'AnnouncementsController@show');
    Route::get('/announcement/{announcement}/edit', 'AnnouncementsController@edit');
    Route::patch('/announcement/{announcement}', 'AnnouncementsController@update');
    Route::delete('/announcement/{announcement}/delete', 'AnnouncementsController@destroy');
});

Route::group(['middleware' =>  ['auth', 'user']], function() {
  // Route::get('/appointment', 'AppointmentController@index');
  Route::get('/appointment/create', 'AppointmentController@create');
  Route::post('/appointment', 'AppointmentController@store');
  Route::get('/appointment/{appointment}', 'AppointmentController@show');
  Route::get('/appointment/{appointment}/edit', 'AppointmentController@edit');
  Route::patch('/appointment/{appointment}', 'AppointmentController@update');
  Route::delete('/appointment/{appointment}/delete', 'AppointmentController@destroy');
  Route::get('/appointment','AvailabilitiesController@index');

  // Route::get('/symptom/checker', 'SymptomsController');

  Route::resource('/profile', 'StudentsController');

});



Auth::routes();
