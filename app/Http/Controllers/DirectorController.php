<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies\Director;

class DirectorController extends Controller
{
  public function director($term){
      $result = Director::director($term);
      return view('layouts.director', ['director' => $result["data"]]);
    }
}
