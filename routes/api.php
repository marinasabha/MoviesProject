<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Movies;
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
})->middleware('auth:api');
Route::get('movies/geners/{GENERS}',function($GENERS){
  $movies= App\Movies::where('GENERS',$GENERS)->get();
  return response()->json (['status'=>'success',
                            'data'=>$movies
                          ]);
});
Route::get('movies/order/{orderBy}',function($orderBy){
/* if ($orderBy == YEAR) or ($orderBy ==)*/
  $order = DB::table('movies')
                ->orderBy($orderBy,'desc')
                ->get();
  return response()->json (['status'=>'success',
                            'data'=>$order
                          ]);
});
Route::get('/recomender1',function(){


$recomender = DB::table('recomendations')->select('RECOMENDER')
  ->where('user_id', Auth::user()->id)->get();
  dump($recomender[0]);
  $arr = explode(',', $recomender[0]->RECOMENDER);
  return $arr;
})->middleware('auth:api');
  /*DB::table('users')
            ->where('id', 1)
            ->update(['votes' => 1]);*/

Route::get('/recomender',function(){
  $recomender = DB::table('recomendations')->select('RECOMENDER')
    ->where('user_id', Auth::user()->id)->get();
    $rec = str_replace('"', "", $recomender[0]->RECOMENDER);
    $arr = explode(',', $rec);
    $rec = DB::table('movies')
                      ->whereIn('ID',$arr)
                      ->get();
                      return response()->json([
                        'data'=>$rec
                      ]);
})->middleware('auth:api');





  /*  return View::make("your view here");*/


/* Route::get('/marina',function()
   {
       $users = DB::table('users')->get();

       return $users; }); */
Route::post('/insertRec','MovieController@insertRecomendation')->middleware('auth:api');
Route::post('/insertRate','MovieController@insertRating')->middleware('auth:api');
Route::get('/search',function(Request $request){
      $query = $request->input("q");
      $movie = DB::table('movies')
      ->where('TITLE', 'LIKE', "%$query%")
      ->get();
      return response()->json([
      'data'=>$movie
      ]);
});
Route::get('movies/order/year',function(){
  $order = DB::table('movies')
                ->orderBy('YEAR', 'desc')
                ->get();
                return response()->json([
                  'data'=>$order
                ]);

});
Route::get('movies/order/site',function(){
  $order = DB::table('movies')
                ->orderBy('SITE_SCORE','desc')
                ->get();
                return response()->json([
                  'data'=>$order
                ]);
              });
  Route::get('movies/order/oldest',function(){
  $order = DB::table('movies')
  ->orderBy('created_at', 'asc')
  ->get();
   return response()->json([
    'data'=>$order
        ]);
    });
    Route::get('movies/order/alpha',function(){
    $order = DB::table('movies')
    ->orderby('TITLE', 'ASC')
    ->get();
     return response()->json([
      'data'=>$order
          ]);
      });
    Route::get('movies/order/latest',function(){
    $order = DB::table('movies')
     ->orderBy('created_at', 'desc')
     ->get();
      return response()->json([
            'data'=>$order
              ]);
    });


            Route::get('movies/order/imdb',function(){
              $order = DB::table('movies')
                              ->orderBy('IMDB_SCORE','desc')
                              ->get();
                              return response()->json([
                                'data'=>$order
                              ]);
                            });
Route::get('movies/{ID}',function($ID){
  return response()->json (App\Movies::where('ID',$ID)->get());
})->middleware('auth:api');

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
