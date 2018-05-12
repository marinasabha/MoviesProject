<?php
  namespace App\Movies;
  use Illuminate\Support\Facades\DB;

  class Director {

  public static function director($term){

    $director = DB::table('movies')->select ('TITLE', 'YEAR','DIRECTOR','IMAGEPATH','ID')
       ->where('DIRECTOR',$term)
         ->orderBy('YEAR','desc')
         ->paginate(12);
         return array('data' => $director);
       }
}

 ?>
