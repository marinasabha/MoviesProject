<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
use App\Movies;
use App\Recomendation;
use Auth;
use Illuminate\Support\Facades\DB;
class MovieController extends Controller

{
   public function insertRating(Request $request ){
   $collection = new Collection ();
   $collection->user_id = Auth::user()->id;
   $collection->movie_id = 10;
   $collection->WATCHED=false;
   $collection->RATING=$request->input("RATING");
   $collection ->save();
   return response()->json([
     'status'=>'success',
     'data'=>$collection,

   ]);

    }

      public function insertRecomendation(Request $request ){
        $recomendation = new Recomendation ();
        $recomendation->user_ID = Auth::user()->id;
        $recomendation->RECOMENDER = $request->input("RECOMENDER");
        $recomendation->save();
        return response()->json([
          'status'=>'success',
          'data'=>$recomendation,
        ]);
        }



      /*  return View::make("your view here");*/
    
}
