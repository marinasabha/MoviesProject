@extends('layouts.app')
@section('content')
<div class="row">
    <div class="container-fluid row">
      @foreach($actors as $actor)
        <div class="movie">
          <div class="col-md-3">
          @if($actor->IMAGEPATH == "")
            <a href="/movie/{{ $actor->ID }}">  <img class="img-movie img-thumbnail" src="/storage/posters/marina.jpg" style="width:170px;height:250px" alt="default movie image" /> </a>
          @else
            <a href="/movie/{{ $actor->ID }}">  <img class="img-movie img-thumbnail img-responsive" style="width:170px;height:250px" src="/storage/posters/{{ $actor->IMAGEPATH }}" /> </a>
          @endif
          <p>&nbsp</p>
        <p style="color:white;">{{ $actor->TITLE }}</p>
          <p style=color:white;">{{ $actor->YEAR }}</p>

        </div>
        </div>
@endforeach
      </div>
      <div>
        {{ $actors->links() }}
    </div>

@endsection
