<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
use App\Movies;
class MovieController extends Controller

{
   public function insertRating(Request $request ){
   $collection = new Collection ();
   $collection->RATING = $request ->input("RATING");
   $collection->user_id = 1;
   $collection->movie_id = 10;
   $collection->WATCHED=false;
   $collection ->save();
   return response()->json([
     'status'=>'success',
     'data'=>$collection,

   ]);

    }
}
