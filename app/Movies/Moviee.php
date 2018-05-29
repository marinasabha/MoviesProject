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
    $s = $recomender[0]->RECOMENDER;


    $rec = DB::table('movies')
                      ->whereIn('ID',$arr)
                      ->orderByRaw("field(id,${s})")
                      ->limit(20)
                      ->get();
                    }
    else {
      $rec = DB::table('movies')
                        ->orderBy('YEAR','desc')
                        ->limit(20)
                        ->get();

    }
                    return array('data'=> $rec);
                  }
                }

 ?>
