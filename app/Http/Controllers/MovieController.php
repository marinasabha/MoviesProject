zz<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
   public function insertRating(Illuminate\Http\Request $request ){
   $collection = new Collection ();
   $collection->RATING = $request ->input("RATING");
   $collection ->save();
   return response()->json([
     'status'=>'success',
     'data'=>$collection,

   ]);

    }
}
