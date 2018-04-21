<?php
  namespace App\Movies;
  use Illuminate\Support\Facades\DB;

class Moviee{
  public static function poster($ID){
      $order = DB::table('movies')->select('TITLE','IMDB_LINK','IMDB_SCORE','LANGUAGE','COUNTRY', 'YEAR','IMAGEPATH','ID','DIRECTOR','DURATION','ACTOR_1','GENERS')
         ->where('ID',$ID)
         ->get();
    return array('data'=> $order);
  }

}
