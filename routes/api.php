<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('movies',function(){
  return json_encode(App\Movies::all());
});
Route::get('movies/{ID}',function($ID){
  return response()->json (App\Movies::where('ID',$ID)->get());
});

Route::get('director/{DIRECTOR}',function($DIRECTOR){
  return response()->json (App\Movies::where('DIRECTOR',$DIRECTOR)->get());
});

Route::get('actor_2/{ACTOR_2}',function($ACTOR_2){
  return response()->json (App\Movies::where('ACTOR_2',$ACTOR_2)->get());
});

Route::get('geners/{GENERS}',function($GENERS){
  return response()->json (App\Movies::where('GENERS',$GENERS)->get());
});

Route::get('actor_1/{ACTOR_1}',function($ACTOR_1){
  return response()->json (App\Movies::where('ACTOR_1',$ACTRO_1)->get());
});

Route::get('title/{TITLE}',function($TITLE){
  return response()->json (App\Movies::where('TITLE',$TITLE)->get());
});

Route::get('actor_3/{ACTOR_3}',function($ACTOR_3){
  return response()->json (App\Movies::where('ACTOR_3',$ACTOR_3)->get());
});

Route::get('imdb_link/{IMDB_LINK}',function($IMDB_LINK){
  return response()->json (App\Movies::where('IMDB_LINK',$IMDB_LINK)->get());
});

Route::get('language/{LANGUAGE}',function($LANGUAGE){
  return response()->json (App\Movies::where('LANGUAGE',$LANGUAGE)->get());
});

Route::get('country/{COUNTRY}',function($COUNTRY){
  return response()->json (App\Movies::where('COUNTRY',$COUNTRY)->get());
});

Route::get('year/{YEAR}',function($YEAR){
  return response()->json (App\Movies::where('YEAR',$YEAR)->get());
});

Route::get('imdb_score/{IMDB_SCORE}',function($IMDB_SCORE){
  return response()->json (App\Movies::where('IMDB_SCORE',$IMDB_SCORE)->get());
});



Route::get('site_score/{SITE_SCORE}',function($SITE_SCORE){
  return response()->json (App\Movies::where('SITE_SCORE',$SITE_SCORE)->get());
});

Route::get('num_of_votes/{NUM_OF_VOTES}',function($NUM_OF_VOTES){
  return response()->json (App\Movies::where('NUM_OF_VOTES',$NUM_OF_VOTES)->get());
});

Route::get('description/{DESCRIPTION}',function($DISCRIPTION){
  return response()->json (App\Movies::where('DISCRIPTION',$DISCRIPTION)->get());
});

Route::get('imagepath/{IMAGEPATH}',function($IMAGEPATH){
  return response()->json (App\Movies::where('IMAGEPATH',$IMAGEPATH)->get());
});





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
