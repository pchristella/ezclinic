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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index');

    Route::resource('/profile', 'StudentsController');

    Route::get('/appointment', 'AppointmentController@index');
    Route::get('/appointment/create', 'AppointmentController@create');
    Route::post('/appointment', 'AppointmentController@store');
    Route::get('/appointment/{appointment}', 'AppointmentController@show');
    Route::get('/appointment/{appointment}/edit', 'AppointmentController@edit');
    Route::patch('/appointment/{appointment}', 'AppointmentController@update');
    Route::delete('/appointment/{appointment}/delete', 'AppointmentController@destroy');

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
    Route::delete('/event/{event}/delete', 'EventsControllersController@destroy');
});



Auth::routes();
