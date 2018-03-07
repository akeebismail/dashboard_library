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

Route::get('/', 'HomeController@index');
Route::get('repo', function (){
    $repo = new \App\LibraryRepo\LibraryRepository('Mon');
    return $repo->setTomorrow();
    //return $repo->isTodaySet()? 'ye': 'no';
});
Route::get('pword',function (){

    return bcrypt('qwerty11');
});
Route::get('down',function (){

    return view('welcome');
});

Route::get('not-open',function (){
    return 'Sorry library not open yet';
})->name('not-open');
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

Route::resource('admin','Librarian\UserController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/superuser','Librarian\UserController');

Route::resource('notification','PostController');

//Route::resource('room', 'RoomsController');

Route::get('library-closed','HomeController@closeLibrary')->name('lib-close');