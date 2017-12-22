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
    return view('home');
});

Route::get('admin', function (){
    return view('admin');
});

Route::get('superuser',function (){
    return view('supperuser.superuser');
})->name('superuser');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('notification','NotificationController');

Route::resource('hall', 'HallController');