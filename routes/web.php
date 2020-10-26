<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::post('login','AuthController@login')->name('user.login');
Route::view('login', 'auth.login')->name('login');
Route::view('register','auth.register')->name('register');
Route::resource('user', 'UserController');


Route::group(['middleware' => 'auth'], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('logout','AuthController@logout')->name('user.logout');
});

Route::view('/', 'front.home');
Route::view('about', 'front.about');
Route::view('contact', 'front.contact');
Route::view('tourlist', 'front.tourlist');
Route::view('visaconsultancy', 'front.visaconsultancy');
Route::view('hotelreservation', 'front.hotelreservation');
Route::view('login', 'front.login');
Route::view('register', 'front.register');
Route::view('uktour', 'front.uktour');
Route::view('ustour', 'front.ustour');
Route::view('uaetour', 'front.uaetour');
Route::view('polandtour', 'front.polandtour');
Route::view('pakistantour', 'front.pakistantour');


