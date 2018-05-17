<?php
  namespace App\Movies;
  use Illuminate\Support\Facades\DB;
  use Auth;

class Moviee{
  public static function poster($ID){
      $order = DB::table('movies')
         ->where('ID',$ID)
         ->get();
    return array('data'=> $order);
  }

public static function recomender(){
$recomender = DB::table('recomendations')->select('RECOMENDER')
  ->where('user_id', Auth::user()->id)->get();
  if(count($recomender) >0) {
  $rec = str_replace('"', "", $recomender[0]->RECOMENDER);
  $arr = explode(',', $rec);


  $rec = DB::table('movies')
                    ->whereIn('ID',$arr)
                    
                    ->paginate(12);
                  }
  else {
    $rec = DB::table('movies')
                      ->orderBy('YEAR','desc')
                      ->paginate(12);

  }
                    return array('data'=> $rec);
                  }
                }

 ?>
