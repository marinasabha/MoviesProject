<?php
  namespace App\Movies;
  use Illuminate\Support\Facades\DB;

  class Search {
    public static function search($term) {
      $movies = DB::table('movies')->select('TITLE', 'YEAR','IMAGEPATH','ID')
      ->where('TITLE', 'LIKE', "%$term%")
      -> paginate();
      return array('data' => $movies );
    }
  }

 ?>
