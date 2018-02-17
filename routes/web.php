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
Route::get('repo', function (){
    $repo = new \App\LibraryRepo\LibraryRepository('Mon');
    return $repo->libDay;
});
Route::get('pword',function (){
    //$tomorrow = mktime(0,0,date("m"), date("d")+1, date("Y"));

    return date("D");
});
Route::get('down',function (){

    return view('welcome');
});
Route::get('today','LibraryDayController@getCurrentDay')->name('today');
Route::group(['prefix','libday','as'=>'lib-day.'],function (){

});
//Route::resource('checkin','CheckinController');
Route::group(['prefix'=>'checkin', 'as'=>'checkin.','middleware'=>['auth']],function (){
    Route::get('index','CheckinController@index')->name('index');
    Route::post('checkin','CheckinController@checkin')->name('checkin');
    Route::post('checkout','CheckinController@checkout')->name('checkout');
});
Route::get('logout','Auth\LoginController@logout')->name('logout');

Route::resource('admin','UserController');
/*Route::get('superuser',function (){
    return view('supperuser.superuser');
})->name('superuser');*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('superuser','UserController');

Route::resource('notification','PostController');

//Route::resource('room', 'RoomsController');
