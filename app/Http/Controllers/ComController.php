<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComController extends Controller
{

/**

 * Show the application dataAjax.

 *

 * @return \Illuminate\Http\Response

 */

public function dataAjax(Request $request)

{

  $data = [];


    if($request->has('q')){

        $search = $request->q;

        $data = DB::table("movies")

            ->select("TITLE","YEAR","ID","IMAGEPATH")

            ->where('TITLE','LIKE',"%$search%")

            ->get();

    }


    return response()->json($data);

}

}
