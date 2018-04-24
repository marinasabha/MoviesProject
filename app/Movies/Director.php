<?php
  namespace App\Movies;
  use Illuminate\Support\Facades\DB;

  class Director {

  public static function director($term){

    $director = DB::table('movies')->select ('TITLE', 'YEAR','DIRECTOR','IMAGEPATH','ID')
       ->where('DIRECTOR',$term)
         ->orderBy('YEAR','desc')
         ->get();
         return array('data' => $director);
       }
}

 ?>
