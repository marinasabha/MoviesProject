<?php
  namespace App\Movies;
  use Illuminate\Support\Facades\DB;

  class Search {
    public static function search($term) {
      $movies = DB::table('movies')->select('TITLE', 'YEAR','IMAGEPATH','ID')
      ->where('TITLE', 'LIKE', "%$term%")
      ->get();
      return array('data' => $movies );
    }
  }
  class Moviee{
    public static function poster($ID){
        $order = DB::table('movies')
           ->where('ID',$ID)
           ->get();
      return array('data'=> $order);
    }

  }
 ?>
