@extends('layouts.app')
@section('content')
<div class="row">
    <div class="container-fluid row">
      @foreach($actors as $actor)
        <div class="movie">
          <div class="col-md-3">
          @if($actor->IMAGEPATH == "")
            <a href="/movie/{{ $actor->ID }}">  <img src="/storage/posters/marina.jpg" style="width:170px;height:250px" alt="default movie image" /> </a>
          @else
            <a href="/movie/{{ $actor->ID }}">  <img class="img-responsive" style="width:170px;height:250px" src="/storage/posters/{{ $actor->IMAGEPATH }}" /> </a>
          @endif
        <p>{{ $actor->TITLE }}</p>
          <p>{{ $actor->YEAR }}</p>
          <p>{{ $actor->ACTOR_1 }}</p>
            <p>{{ $actor->ACTOR_2 }}</p>
              <p>{{ $actor->ACTOR_3 }}</p>
        </div>
        </div>
@endforeach
      </div>
    </div>

@endsection
