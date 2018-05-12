@extends('layouts.app')
@section('content')
</div>
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
    <p><b>Genre:</b></p>
    <select class="form-control" id="id1">
      <option value="|" selected="selected">All</option>
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
      <option value="western">Western</option>
    </select>
  </div>
  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
    <p><b>Rating:</b></p>
    <select class="form-control" id="id2">
      <option value="-1" selected="selected">All</option>
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
  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
    <p><b>Order By:</b></p>
    <select class="form-control"id="id3" >
      <option value="YEAR" selected="selected">Year</option>
      <option value="Oldest">Oldest</option>
      <option value="Latest">Latest</option>
      <option value="Alphabetical">Alphabetical</option>
    </select>
  </div>
  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
    <p>&nbsp</p>
    <button id="search" class="btn btn-primary">Search</button>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
</div>
<div class="mvs">
</div>
<div id="nav-links">
</div>
<div id="nav-links">
</div>
<script>
$(document).ready(function(){
  function get_movies(page) {
    $.ajax({
      type: "GET",
      url: '/api/orderby2?t=YEAR&r=-1&g=|&page=' + page,
      data:{},
      dataType: "json",
      error: function (request, error) {
          alert(error);
          alert(request);
      },
      success: function(result){
        $('.mvs').html("");
        result['data']['data'].forEach(function(elem) {
          if (elem['IMAGEPATH']==""){
            elem['IMAGEPATH']='marina.jpg';
          }
          var x = `
          <div class="col-md-3" style="height:350px" >
          <a href="/movie/`+elem['ID']+`"><img class="img-movie img-thumbnail" src="/storage/posters/`+elem['IMAGEPATH']+`"  alt="marina" width="170" height="255"> </a>
          <p>&nbsp</p>
            <p style="height:20px"> <strong>Title : </strong> ` + elem['TITLE'] + `</p>
            <p style="height:50px"><strong>Year : </strong> ` + elem['YEAR'] + `</p>
            </div>`;

          $('.mvs').append(x);
        });
        next_page_url = result['data']['next_page_url'];
        previous_page_url = result['data']['prev_page_url'];
        $("#nav-links").html("");

        if(previous_page_url){
          var x = "<button style='margin-right: 5px;' class='btn btn-primary' id='left-btn'>Previous</button>"
          $("#nav-links").append(x);
          $("#left-btn").click(function() {
            get_movies(result['data']['current_page'] - 1);
          });
        }
        var x = result["data"]['current_page'] + "/" + result["data"]["last_page"];
        $("#nav-links").append(x);
        if(next_page_url) {
          var x = "<button style='margin-left: 5px;' class='btn btn-primary' id='right-btn'>Next</button>"
          $("#nav-links").append(x);
          $("#right-btn").click(function() {
            get_movies(result['data']['current_page'] + 1);
          });
        }
    }
    });
  }
  get_movies(1);
  function get_movies_filter(page) {
    $.ajax({
      type: "GET",
      url: '/api/orderby2?t=' + $('#id3').val() + '&r=' + $('#id2').val() + '&g=' + $('#id1').val() + "&page=" + page,
      data:{},
      dataType: "json",
      error: function (request, error) {
        alert(error);
        alert(request);
      },
      success: function(result){
        $('.mvs').html("");
        $("#nav-links").html("");
        console.log(result);

        result['data']['data'].forEach(function(elem) {
          if (elem['IMAGEPATH']=="")
              { elem['IMAGEPATH']='marina.jpg'; }

          var x = `
            <div class="col-md-3" style="height:350px" >
            <a href="/movie/`+elem['ID']+`"><img class="img-movie img-thumbnail" src="/storage/posters/`+elem['IMAGEPATH']+`"  alt="marina" width="170" height="255"> </a>
            <p>&nbsp</p>
            <p style="height:20px"> <strong>Title : </strong> ` + elem['TITLE'] + `</p>
            <p style="height:50px"><strong>Year : </strong> ` + elem['YEAR'] + `</p>
            </div>`;

          $('.mvs').append(x);
          next_page_url = result['data']['next_page_url'];
          previous_page_url = result['data']['prev_page_url'];
          $("#nav-links").html("");

          if(previous_page_url){
            var x = "<button style='margin-right: 5px;' class='btn btn-primary' id='left-btn'>Previous</button>"
            $("#nav-links").append(x);
            $("#left-btn").click(function() {
              get_movies_filter(result['data']['current_page'] - 1);
            });
          }
          var x = result["data"]['current_page'] + "/" + result["data"]["last_page"];
          $("#nav-links").append(x);
          if(next_page_url) {
            var x = "<button style='margin-left: 5px;' class='btn btn-primary' id='right-btn'>Next</button>"
            $("#nav-links").append(x);
            $("#right-btn").click(function() {
              get_movies_filter(result['data']['current_page'] + 1);
            });
          }
        });
      }
      });
  }
  $('#search').click(function() {
    get_movies_filter(1);
  });
});

</script>
@endsection
