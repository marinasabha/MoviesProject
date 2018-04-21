
<div class="movie">
  <div class="col-md-3">
  @if($movie->IMAGEPATH == "")
    <img src="/storage/posters/1.jpg" style="width:140px;height:170px" alt="default movie image" />
  @else
    <img class="img-responsive" style="width:140px;height:170px" src="/storage/posters/{{ $movie->IMAGEPATH }}" />
  @endif
  <a href="/poster/{{ $movie->ID }}"><p>{{ $movie->TITLE }}</p></a>
  <p>{{ $movie->YEAR }}</p>
</div>
</div>
    <!--<div  class="col col-sm-3">
  @if($movie->IMAGEPATH == "")
      <a href=""> <img style="width:170px;height:255px" src="/storage/posters/1.jpg" alt="default movie image" class="c1"/> </a>
  @else
  <a href="">  <img class="img-responsive" style="width:170px;height:255px" src="/storage/posters/{{ $movie->IMAGEPATH }}" class="c1" /> </a>
  @endif
<div height="100px">
  <p ><strong>Title:</strong>{{ $movie->TITLE }} </p>
<p> <strong>Year:</strong>{{ $movie->YEAR }}</p>
       </div>

</div>
</div> -->
