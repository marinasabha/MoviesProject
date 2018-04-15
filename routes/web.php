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
    return view('welcome');
});


Route::get('/posters',function (){
  return view ('posters');

});
Route::get('/child',function (){
  return view ('child');

});
Route::resource('/student','StudentController');
Route::get('/ajaxdata', 'AjaxdataController@index')->name('ajaxdata');
Route::get('/ajaxdata/getdata', 'AjaxdataController@getdata')->name('ajaxdata.getdata');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
