<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
use App\Movies;
use App\Recomendation;
use Auth;
use Illuminate\Support\Facades\DB;
use Response;
class MovieController extends Controller

{
   public function insertRating(Request $request){
   $collection = new Collection ();
   $collection->user_id = Auth::user()->id;
   $collection->movie_id =$request->input("movie_id");
   $collection->WATCHED=true;
   $data=DB::table('collections')->where(
               ['user_id'=>Auth::user()->id,
                'movie_id'=>$request->movie_id
                ])->get();
   if(count($data) >0){
   try{
    DB::table('collections')->where('user_id',Auth::user()->id)->where('movie_id',$request->movie_id)->update(['RATING'=>$request->RATING]);
}catch(\Exception $exc) {
    return Response::json(['err',$exc->getMessage()]);
}
}
   else{
     $collection->RATING=$request->input("RATING");
     $collection ->save();
   }
   return response()->json([
     'status'=>'success',
     'data'=>$collection,

   ]);

    }
    public function insert(Request $request){
      $exist= DB::table("$collections")->where(['user_id = Auth::user()->id'])->get();
if(count($exist)  >0) {
  $user = Collection::firstOrNew(array('RATING' => Input::get('RATING')));
$user->foo = Input::get('foo');
$user->save();
}
else  {
  $collection->RATING=$request->input("RATING");

    }
}
      public function insertRecomendation(Request $request ){
        $recomendation = new Recomendation();
        $recomendation->user_ID = Auth::user()->id;
        $recomendation->RECOMENDER =$request->input("RECOMENDER");
        $recomendation->save();
        return response()->json([
          'status'=>'success',
          'data'=>$recomendation,
        ]);
        }



      /*  return View::make("your view here");*/

}
