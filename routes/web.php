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

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
});

Route::get('/reservation', function () {
    return view('pages.admin.reservation.index');
});
Route::get('/rooms', function () {
    return view('pages.admin.room.index');
});
Route::get('/room-statuses', function () {
    return view('pages.admin.roomstatus.index');
});
Route::get('/room-type', function () {
    return view('pages.admin.type-room.index');
});
Route::get('/room-facility', function () {
    return view('pages.admin.facility-room.index');
});
Route::get('/costumer', function () {
    return view('pages.admin.costumer.index');
});
Route::get('/receptionist', function () {
    return view('pages.admin.receptionist.index');
});

Auth::routes();

