<?php
  namespace App\Movies;
  use Illuminate\Support\Facades\DB;

class Moviee{
  public static function poster($ID){
      $order = DB::table('movies')
         ->where('ID',$ID)
         ->get();
    return array('data'=> $order);
  }

}
