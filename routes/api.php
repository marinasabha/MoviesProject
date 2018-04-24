<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Movies;
use App\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/ Route::post("/register", function(Request $request) {

  $validator = Validator::make($request->all(), [
    'name' => 'required',
    'email' => 'required|email',
    'password' => 'required',
    //'c_password' => 'required|same:password',
  ]);

  if($validator->fails()){
    return response()->json(["message"=> $validator->errors()], 400);
  }

  $input = $request->all();
  $input['password'] = bcrypt($input['password']);
  try{
  $user = User::create($input);
}
catch(\Exception $exc) {
   return response()->json(["err"=>'email already exists .']);
}

  return response()->json(["message" => 'User register successfully.'], 200);
});

Route::get('/search',function(Request $request){
      $query = $request->input("q");
      $movie = DB::table('movies')->select('TITLE', 'YEAR','IMAGEPATH')
      ->where('TITLE', 'LIKE', "%$query%")
      ->get();
      return response()->json([
      'data'=>$movie
      ]);
});

Route::get('/orderby',function(Request $request){
    $query = $request->input("t");
    $query1 = $request->input("r");
    $query2 = $request->input("g");
   if($query1 <> '-1')
   {
     if ($query == 'YEAR'){

  $order = DB::table('movies')->select ('TITLE', 'YEAR')
   ->where('GENERS','LIKE',"%$query2%")
   ->whereRaw('FLOOR(IMDB_SCORE) = ?',[$query1])
   ->orderBy('YEAR','desc')
   ->Paginate(20);
 }

if ($query == 'Alphabetical'){
  $order = DB::table('movies')->select ('TITLE', 'YEAR')
               ->where('GENERS','LIKE',"%$query2%")
               ->whereRaw('FLOOR(IMDB_SCORE) = ?',[$query1])
                ->orderBy('TITLE','asc')
              ->Paginate(20);
}

  if ($query == 'Oldest'){
  $order = DB::table('movies')->select ('TITLE', 'YEAR')
                ->where('GENERS','LIKE',"%$query2%")
                ->whereRaw('FLOOR(IMDB_SCORE) = ?',[$query1])
                ->orderBy('created_at','asc')
                ->Paginate(20);
}
if ($query == 'Latest'){
 $order = DB::table('movies')->select ('TITLE', 'YEAR')
               ->where('GENERS','LIKE',"%$query2%")
               ->whereRaw('FLOOR(IMDB_SCORE) = ?',[$query1])
               ->orderBy('created_at','desc')
               ->Paginate(20);
}
  return response()->json (['status'=>'success',
                            'data'=>$order
                          ]);
           }

    else{
      if ($query == 'YEAR'){

  $order = DB::table('movies')->select ('TITLE', 'YEAR')
   ->where('GENERS','LIKE',"%$query2%")
   ->orderBy('YEAR','desc')
   ->Paginate(20);
 }

if ($query == 'Alphabetical'){
  $order = DB::table('movies')->select ('TITLE', 'YEAR')
               ->where('GENERS','LIKE',"%$query2%")
                ->orderBy('TITLE','asc')
                  ->Paginate(20);
}

  if ($query == 'Oldest'){
  $order = DB::table('movies')->select ('TITLE', 'YEAR')
                ->where('GENERS','LIKE',"%$query2%")
                ->orderBy('created_at','asc')
                ->Paginate(20);
}
if ($query == 'Latest'){
 $order = DB::table('movies')->select ('TITLE', 'YEAR')
               ->where('GENERS','LIKE',"%$query2%")
               ->orderBy('created_at','desc')
               ->Paginate(20);
}
}
  return response()->json (['status'=>'success',
                            'data'=>$order
                          ]);

});
Route::get('/poster',function(Request $request){
    $query = $request->input("q");
    $order = DB::table('movies')
       ->where('ID',$query)
       ->get();
  return response()->json (['status'=>'success',
                            'data'=>$order
                          ]);
});



Route::get('/actor',function(Request $request){
    $query = $request->input("q");
    $order = DB::table('movies')->select ('TITLE', 'YEAR')
       ->where('ACTOR_1',$query)
       ->orWhere('ACTOR_2',$query)
       ->orWhere('ACTOR_3',$query)
         ->orderBy('YEAR','desc')
         ->get();
  return response()->json (['status'=>'success',
                            'data'=>$order
                          ]);
});

Route::get('/director',function(Request $request){
    $query = $request->input("q");
    $ord = DB::table('movies')->select ('TITLE', 'YEAR')
       ->where('DIRECTOR',$query)
         ->orderBy('YEAR','desc')
         ->get();
  return response()->json (['status'=>'success',
                            'data'=>$ord
                          ]);
});

Route::get('/recomender',function(){
  $recomender = DB::table('recomendations')->select('RECOMENDER')
    ->where('user_id', Auth::user()->id)->get();
    if(count($recomender) >0) {
    $rec = str_replace('"', "", $recomender[0]->RECOMENDER);
    $arr = explode(',', $rec);


    $rec = DB::table('movies')
                      ->whereIn('ID',$arr)
                      ->get();
                    }
    else {
      $rec = DB::table('movies')
                        ->whereIn('ID',['1','2','3','4','5','6','7','8','9','10'])
                        ->get();

    }
                      return response()->json([
                        'data'=>$rec
                      ]);
})->middleware('auth:api');
Route::post('/Register','MovieController@register');
Route::post('/insertRec','MovieController@insertRecomendation')->middleware('auth:api');
Route::post('/insertRate','MovieController@insertRating')->middleware('auth:api');


  /*  return View::make("your view here");*/


/* Route::get('/marina',function()
   {
       $users = DB::table('users')->get();

       return $users; }); */

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

 }]);
 Route::get('movies',function(){
   $movies = App\Movies::all();
   $count = count($movies);
    return response()->json([
      'count'=>$count,
     'status'=>'success',
     'data'=>$movies


   ]);
 })->middleware('auth:api');
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
