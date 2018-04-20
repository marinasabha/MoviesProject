
<div class="movie">
  <p>
  </p>
    <div  class="col col-sm-3">
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
</div>
