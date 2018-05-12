@extends('layouts.app')
@section('content')
</div>
<div class="row">
<div class="main_search" style="position:absolute;top:100px;right:550px">
<div class="drop_menu_block">
  <div class="col-md-3">
<div class="drop_menu" style="position:absolute;right:50px"  >
<p><b>Genre:</b></p>
<select id="id1">
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
</div>
<div class="col-md-3">
<div class="drop_menu" style="position:absolute;right:-75px"  >
 <p><b>Rating:</b></p>
<select id="id2">
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
</div>
 <div class="col-md-3">
<div class="drop_menu drop_menu-last" style="position:absolute;right:-100px" >
<p><b>Order By:</b></p>
<select class="selects-container"id="id3" >
<option value="YEAR" selected="selected">Year</option>
<option value="Oldest">Oldest</option>
<option value="Latest">Latest</option>
<option value="Alphabetical">Alphabetical</option>
</select>
</div>
</div>
</div>
</div>
 <!--<input type="text" class="key"> -->
 <div style="position:absolute;right:350px;top:100px">
      <button class="mybtn">Search</button>
    </div>
<div class="mvs" style="position:absolute;top:250px">
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
        console.log(result);
        result['data']['data'].forEach(function(elem) {
          if (elem['IMAGEPATH']==""){
            elem['IMAGEPATH']='marina.jpg';
          }
          var x = `
          <div class="col-md-3" style="height:350px" >
          <a href="/movie/`+elem['ID']+`"><img class="img-thumbnail" src="/storage/posters/`+elem['IMAGEPATH']+`"  alt="marina" width="170" height="255"> </a>
            <p style="height:20px"> <strong>Title : </strong> ` + elem['TITLE'] + `</p>
            <p style="height:50px"><strong>Year : </strong> ` + elem['YEAR'] + `</p>
            </div>`;

          $('.mvs').append(x);
        });
        next_page_url = result['data']['next_page_url'];
        previous_page_url = result['data']['prev_page_url'];
        console.log(previous_page_url);
        console.log(next_page_url);
        $("#nav-links").html("");
        if(previous_page_url){
          var x = "<button class='btn btn-primary' id='left-btn' >Previous</button>"
          $("#nav-links").append(x);
          $("#left-btn").click(function() {
            get_movies(result['data']['current_page'] - 1);
          });
        }
        if(next_page_url) {
          var x = "<button class='btn btn-primary' id='right-btn'>Next</button>"
          $("#nav-links").append(x);
          $("#right-btn").click(function() {
            get_movies(result['data']['current_page'] + 1);
          });
        }
    }
  });
}
  get_movies(1);

$('.mybtn').on('click',function(){
$.ajax({
  type: "GET",
    url: '/api/orderby2?t=' + $('#id3').val() + '&r=' + $('#id2').val() + '&g=' + $('#id1').val(),
  data:{},
    dataType: "json",
    error: function (request, error) {
alert(error);
alert(request);
  },
    success: function(result){
      $('.mvs').html("");

      result['data']['data'].forEach(function(elem) {
        if (elem['IMAGEPATH']=="")
            { elem['IMAGEPATH']='marina.jpg'; }

      var x = `
      <div class="col-md-3" style="height:350px" >
      <a href="/movie/`+elem['ID']+`"><img class="img-thumbnail" src="/storage/posters/`+elem['IMAGEPATH']+`"  alt="marina" width="170" height="255"> </a>
        <p style="height:20px"> <strong>Title : </strong> ` + elem['TITLE'] + `</p>
        <p style="height:50px"><strong>Year : </strong> ` + elem['YEAR'] + `</p>
        </div>
          `;

$('.mvs').append(x);

});
}
});
});
});

</script>
@endsection
