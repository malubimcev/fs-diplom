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
    return view('index');
});

Route::resource('halls', 'HallController');
Route::resource('movies', 'MovieController');
Route::resource('seances', 'SeanceController');
Route::resource('tickets', 'TicketController');
Route::resource('seats', 'SeatController');


// Route::group(['prefix' => 'admin'], function () {
//     Route::resource('tickets', 'TicketController');
// });
