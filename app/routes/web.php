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
    return view('welcome');
});

Route::get('/hotels', 'HotelsController@list');
Route::post('/hotels', 'HotelsController@store');
Route::post('/hotels/update', 'HotelsController@update');
Route::post('/hotels/delete', 'HotelsController@delete');
Route::get('/rooms/{hotel_id}', 'RoomsController@list');
Route::post('/rooms', 'RoomsController@store');
Route::post('/rooms/update', 'RoomsController@update');
Route::post('/rooms/delete', 'RoomsController@delete');