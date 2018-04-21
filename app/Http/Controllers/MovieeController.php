<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies\Moviee;

class MovieeController extends Controller
{
  public function posterr($ID){
    $result = Moviee::poster($ID);
    return view('layouts.poster', ['order' => $result["data"]]);
  }

}
