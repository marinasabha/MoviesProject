<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
use App\Movies;
use Auth;
class MovieController extends Controller

{
   public function insertRating(Request $request ){
   $collection = new Collection ();
   $collection->recomender = $request ->input("recomender");
   $collection->user_id = Auth::user()->id;
   $collection->movie_id = 10;
   $collection->WATCHED=false;
   $collection->RATING=1;
   $collection ->save();
   return response()->json([
     'status'=>'success',
     'data'=>$collection,

   ]);

    }
}
