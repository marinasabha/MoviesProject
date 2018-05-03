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
  public function register(Request $request){
  $data=DB::table('users')->where(
    ['email'=>$request->email])->get();
     if(count($data)==0){
       $user = new User();
       $user->name=$request->input("name");
       $user->password=$request->input("password");
       $user->email=$request->input("email");
       $user->save();
     return response()->json([
       'status'=>'success',
       'data'=>$user,

     ]);
   }
   else {
     return response()->json([
     'status'=>' failed',
     'data'=>'User already exists',

   ]);
}
   }





 public function insertRating(Request $request){
 $collection = new Collection ();
 $collection->user_id = Auth::user()->id;
 $collection->movie_id =$request->input("movie_id");
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
