<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
  $movies = App\Movies::all();
  $count = count($movies);
   return response()->json([
     'count'=>$count,
    'status'=>'success',
    'data'=>$movies


  ]);

});
Route::post('/inesertRate','MovieController@insertRating');

Route::get('movies/{ID}',function($ID){
  return response()->json (App\Movies::where('ID',$ID)->get());
});

Route::get('movies/director/{DIRECTOR}',function($DIRECTOR){
  return response()->json (App\Movies::where('DIRECTOR',$DIRECTOR)->get());
});

Route::get('movies/actor_2/{ACTOR_2}',function($ACTOR_2){
  return response()->json (App\Movies::where('ACTOR_2',$ACTOR_2)->get());
});

Route::get('movies/geners/{GENERS}',function($GENERS){
  return response()->json (App\Movies::where('GENERS',$GENERS)->get());
});

Route::get('movies/actor_1/{ACTOR_1}',function($ACTOR_1){
  return response()->json (App\Movies::where('ACTOR_1',$ACTRO_1)->get());
});

Route::get('movies/title/{TITLE}',function($TITLE){
  return response()->json (App\Movies::where('TITLE',$TITLE)->get());
});

Route::get('movies/actor_3/{ACTOR_3}',function($ACTOR_3){
  return response()->json (App\Movies::where('ACTOR_3',$ACTOR_3)->get());
});

Route::get('movies/imdb_link/{IMDB_LINK}',function($IMDB_LINK){
  return response()->json (App\Movies::where('IMDB_LINK',$IMDB_LINK)->get());
});

Route::get('movies/language/{LANGUAGE}',function($LANGUAGE){
  return response()->json (App\Movies::where('LANGUAGE',$LANGUAGE)->get());
});

Route::get('movies/country/{COUNTRY}',function($COUNTRY){
  return response()->json (App\Movies::where('COUNTRY',$COUNTRY)->get());
});

Route::get('movies/year/{YEAR}',function($YEAR){
  return response()->json (App\Movies::where('YEAR',$YEAR)->get());
});

Route::get('movies/imdb_score/{IMDB_SCORE}',function($IMDB_SCORE){
  return response()->json (App\Movies::where('IMDB_SCORE',$IMDB_SCORE)->get());
});



Route::get('movies/site_score/{SITE_SCORE}',function($SITE_SCORE){
  return response()->json (App\Movies::where('SITE_SCORE',$SITE_SCORE)->get());
});

Route::get('movies/num_of_votes/{NUM_OF_VOTES}',function($NUM_OF_VOTES){
  return response()->json (App\Movies::where('NUM_OF_VOTES',$NUM_OF_VOTES)->get());
});

Route::get('movies/description/{DESCRIPTION}',function($DISCRIPTION){
  return response()->json (App\Movies::where('DISCRIPTION',$DISCRIPTION)->get());
});

Route::get('movies/imagepath/{IMAGEPATH}',function($IMAGEPATH){
  return response()->json (App\Movies::where('IMAGEPATH',$IMAGEPATH)->get());
});

Route::get('users/{id}',function($id){
  return response()->json (App\User::where('id',$id)->get());
});
Route::get('name/{name}',function($name){
  return response()->json (App\User::where('name',$name)->get());
});
Route::get('email/{email}',function($email){
  return response()->json (App\User::where('email',$email)->get());
});
Route::get('users',function(){
  return response()->json(App\User::all());
});
/* ROute::get('api/movies/{ID}',,function ($ID = null){
   if ($ID ==null) {
     $var1=App\Movies::all();}
     else {
       $var1=App\Movies::find($ID);

     }
     return Response::json(array(
       'error'=> false,
       'var1'=> $var1,
       'status_code'=>200
     ));
     public function update($obj)
{
    $client = new Client;
    $client->id = $obj->id;
    $client->fname = $obj->fname;
    $client->lname = $obj->lname;
    $client->email = $obj->email;
    $client->phone = $obj->phone;
    $client->save();
    ublic function index()
 {
  $farmers = Farmer::with('location', 'applicant')->orderBy('farmer')->get();

  return $this->respond([
   'data' => $this->farmerTransformer->transformCollection($farmers->all())
  ]);

 }]);*/








Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
