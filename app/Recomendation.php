<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomendation extends Model
{
  protected $casts =[
    'RECOMENDER'=>'array'
  ];
}
