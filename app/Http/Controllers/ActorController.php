<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies\Actor;

class ActorController extends Controller
{
  public function actor($term){
      $result = Actor::actor($term);
      return view('layouts.actor', ['actors' => $result["data"]]);
    }
}
