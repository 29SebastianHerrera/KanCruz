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

// Rutas paginas estaticas


Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('aboutus', function () {
    return view('aboutus');
});

Route::get('experiencias', function () {
    return view('experiencias');
});

Route::get('calendar', function () {  //Podemo eliminar esta ruta
    return view('calendar');
});

Route::get('/availability', function(){
    return view('calendar.main');
});

Route::get('/confirm', function(){
    return view('confirm');
});

// Ruta API
Route::get('/load-bookings', 'BookingController@loadBookings')->name('routeLoadBookings');

// Ruta PDF confirmación
Route::get('/pdf', 'PDFController@PDF')->name('descargarPDF');

// Rutas CRUDs
Route::resource('booking', 'BookingController');
Route::resource('client', 'ClientController');
Route::resource('room', 'RoomController');

Route::get('/', 'TrialController@index')->name('trial.index');
Route::get('/reserva', 'TrialController@create')->name('trial.create');
Route::get('/habitacion', 'TrialController@view')->name('trial.view');
Route::resource('service', 'ServiceController');
Route::resource('tag', 'TagController');

Route::get('/', 'TrialController@index')->name('trial.index');
Route::get('/reserva', 'TrialController@create')->name('trial.create');
Route::get('/habitacion', 'TrialController@view')->name('trial.view');


Auth::routes();
Route::get('/Panel', 'Panel\PanelController@index')->name('panel.index');
Route::get('/Panel/users', 'Panel\PanelController@view_users')->name('panel.users.index');
Route::get('/Panel/room', 'Panel\PanelController@view_room')->name('room.index');
Route::get('/Panel/service', 'Panel\PanelController@view_service')->name('service.index');
Route::get('/Panel/booking', 'Panel\PanelController@view_booking')->name('booking.index');
Route::get('/Panel/client', 'Panel\PanelController@view_client')->name('client.index');
Route::get('/Panel/tag', 'Panel\PanelController@view_tag')->name('tag.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
