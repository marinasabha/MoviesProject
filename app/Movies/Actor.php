<?php
  namespace App\Movies;
  use Illuminate\Support\Facades\DB;

  class Actor {

  public static function actor($term){
      $actors = DB::table('movies')->select ('TITLE', 'YEAR','IMAGEPATH','ID','ACTOR_1','ACTOR_2','ACTOR_3')
         ->where('ACTOR_1',$term)
         ->orWhere('ACTOR_2',$term)
         ->orWhere('ACTOR_3',$term)
           ->orderBy('YEAR','desc')
           ->get();
             return array('data' => $actors);
           }
         }

 ?>
