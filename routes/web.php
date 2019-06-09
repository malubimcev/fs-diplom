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
<<<<<<< HEAD
    return view('admin');
=======
    return view('index');
>>>>>>> 2484ee001db7751e4b970fc9474193fcb05de524
});

Route::resource('halls', 'HallController');
Route::resource('movies', 'MovieController');
Route::resource('sessions', 'SessionController');
<<<<<<< HEAD
Route::resource('tickets', 'TicketController');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('tickets', 'TicketController');
});
=======
Route::resource('tickets', 'TicketController');
>>>>>>> 2484ee001db7751e4b970fc9474193fcb05de524
