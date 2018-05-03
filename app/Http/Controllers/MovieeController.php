<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies\Moviee;
use Response;
use Auth;
use App\Collection;
use Illuminate\Support\Facades\DB;
class MovieeController extends Controller
{
  public function posterr($ID){
    $result = Moviee::poster($ID);
    return view('layouts.poster', ['order' => $result["data"]]);
  }
  public function insertRate(Request $request){
    $collection = Collection::firstOrNew(['user_id'=> auth()->id(),
                     'movie_id'=>$request->movie_id
                   ]);

    $collection->RATING = $request->input("RATING");
    return $collection->save() ? response()->json([
          'status'=>'success',
          'data'=>$collection,
    ])  : Response::json(['status','error']);
    return response()->json([
         'status'=>'success',]);

}
}
