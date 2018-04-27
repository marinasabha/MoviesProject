<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SelectController;

class SelectControlle extends Controller
{

    public function dataAjax(Request $request)

    {  $query = $request->input("q");
      $movie = DB::table('movies')->select('TITLE', 'YEAR','IMAGEPATH')
      ->where('TITLE', 'LIKE', "%$query%")
      ->get();
      return response()->json([
      'data'=>$movie
      ]);

  }
}
