<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/v1/events', 'ApiController@events');
Route::get('/v1/registrations', 'ApiController@registrations');
Route::post('/v1/login', 'ApiController@login');
Route::post('/v1/profile', 'ApiController@profile');
