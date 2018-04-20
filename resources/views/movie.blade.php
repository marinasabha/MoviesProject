<div class="movie">
  @if($movie->IMAGEPATH == "")
    <img src="/img/default.jpg" alt="default movie image" />
  @else
    <img class="img-responsive" width="170" height="255" src="/storage/posters/{{ $movie->IMAGEPATH }}" />
  @endif
  {{ $movie->TITLE }}
  {{ $movie->YEAR }}
</div>
