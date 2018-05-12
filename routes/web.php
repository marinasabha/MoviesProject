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
Route::get('/quick', 'ComController@dataAjax');
Route::get('/quicksearch', 'SelectController@dataAjax');
Route::get('/test', function () {
    /*$user = Auth::user();
    if ($user == null) {
      return redirect()->route('login');
    }*/
    return view('test');

});
Route::get('/kenda', function () {
    return view('student.kenda');

});

Route::get('/', function () {
    return view('layouts.search');
});



Route::get('/posters',function (){
  return view ('posters');

});
Route::post('/insertRatee', 'MovieeController@insertRatee');
Route::post('/insertRat', 'MovieeController@insertRate');
Route::get('/director/{term}', 'DirectorController@director');
Route::get('/actor/{term}', 'ActorController@actor');
Route::get('/movie/{ID}', 'MovieeController@posterr');
Route::get('/search', 'searchController@search')->name('search');
Route::resource('/student','StudentController');
Route::get('/ajaxdata', 'AjaxdataController@index')->name('ajaxdata');
Route::get('/ajaxdata/getdata', 'AjaxdataController@getdata')->name('ajaxdata.getdata');

Auth::routes();
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('/home', 'HomeController@index')->name('home');
