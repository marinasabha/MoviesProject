@extends('layouts.app')
@section('content')
<div class="container">
<p class="pull-left term">Search Term:</p>
<input name="keyword" autocomplete="off" type="search">
<form method="get" action="/orderby" accept-charset="UTF-8">
  <div class="row">
    <div class="col-md-3">
<div class="selects-container">
<p>Genre:</p>
<select name="genre">
<option value="all">All</option>
<option value="action">Action</option>
<option value="adventure">Adventure</option>
<option value="animation">Animation</option>
<option value="biography">Biography</option>
<option value="comedy">Comedy</option>
<option value="crime">Crime</option>
<option value="documentary">Documentary</option>
<option value="drama">Drama</option>
<option value="family">Family</option>
<option value="fantasy">Fantasy</option>
<option value="film-noir">Film-Noir</option>
<option value="game-show">Game-Show</option>
<option value="history">History</option>
<option value="horror">Horror</option>
<option value="music">Music</option>
<option value="musical">Musical</option>
<option value="mystery">Mystery</option>
<option value="news">News</option>
<option value="reality-tv">Reality-TV</option>
<option value="romance">Romance</option>
<option value="sci-fi">Sci-Fi</option>
<option value="sport">Sport</option>
<option value="talk-show">Talk-Show</option>
<option value="thriller">Thriller</option>
<option value="war">War</option>
</select>
</div>
</diV>
  <div class="col-md-3">
<div class="selects-container">
<p>Rating:</p>
<select name="rating">
<option value="0">All</option>
<option value="9">9+</option>
<option value="8">8+</option>
<option value="7">7+</option>
<option value="6">6+</option>
<option value="5">5+</option>
<option value="4">4+</option>
<option value="3">3+</option>
<option value="2">2+</option>
<option value="1">1+</option>
</select>
</div>
</div>
  <div class="col-md-3">
<div class="selects-container selects-container-last">
<p>Order By:</p>
<select name="order_by">
<option value="latest">Latest</option>
<option value="oldest">Oldest</option>>
<option value="year">Year</option>
<option value="rating">Rating</option>
<option value="alphabetical">Alphabetical</option>
</select>
</div>
</div>
</div>
</form>
</div>
@endsection
