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
    return view('welcome');

});
Route::get('/master',function (){
  return view ('master');

});
Route::get('/child',function (){
  return view ('child');

});
Route::resource('/student','StudentController');
Route::get('/ajaxdata', 'AjaxdataController@index')->name('ajaxdata');
Route::get('/ajaxdata/getdata', 'AjaxdataController@getdata')->name('ajaxdata.getdata');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
