<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies\Search;

class searchController extends Controller
{
    public function search(Request $request){
      $term = $request->input('term');
      $result = Search::search($term);
      return view('layouts.search', ['movies' => $result["data"]]);
    }
}
