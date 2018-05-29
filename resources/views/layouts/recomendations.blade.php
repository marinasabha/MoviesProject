@extends('layouts.app')
@section('content')
<div class="row">
    <div class="container-fluid row">
      @foreach($rec as $recomend)
        <div class="movie">
          <div class="col-md-3" style="height:350px">
          @if($recomend->IMAGEPATH == "")
            <a href="/movie/{{ $recomend->ID }}">  <img class="img-movie img-thumbnail" src="/storage/posters/marina.jpg" style="width:170px;height:250px" alt="default movie image" /> </a>
          @else
            <a href="/movie/{{ $recomend->ID }}">  <img class=" img-movie img-thumbnail img-responsive" style="width:170px;height:250px" src="/storage/posters/{{ $recomend->IMAGEPATH }}" /> </a>
          @endif
          <p>&nbsp</p>
        <p>{{ $recomend->TITLE }}</p>
          <p>{{ $recomend->YEAR }}</p>


        </div>
        </div>
@endforeach
      </div>
    </div>
    <div>

    </div>

@endsection
