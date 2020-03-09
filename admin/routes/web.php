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

Route::get('/', function () {
    return redirect('/events');
});
Route::get('/events', 'EventController@index');
Route::get('/event/create', 'EventController@create');
Route::post('/event/store', 'EventController@store');
Route::get('/event/{event}/attendee', 'EventController@attendee');
Route::get('/event/{event}/rating', 'EventController@rating');
Route::get('/event/{event}', 'EventController@edit');
Route::patch('/event/{event}', 'EventController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
