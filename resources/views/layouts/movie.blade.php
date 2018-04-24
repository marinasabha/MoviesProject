<div class="movie">
  <div class="col-md-3">
  @if($movie->IMAGEPATH == "")
    <a href="/movie/{{ $movie->ID }}">  <img src="/storage/posters/1.jpg" style="width:170px;height:250px" alt="default movie image" /> </a>
  @else
    <a href="/movie/{{ $movie->ID }}">  <img class="img-responsive" style="width:170px;height:250px" src="/storage/posters/{{ $movie->IMAGEPATH }}" /> </a>
  @endif
<p>{{ $movie->TITLE }}</p>
  <p>{{ $movie->YEAR }}</p>
</div>
</div>
