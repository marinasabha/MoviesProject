@extends('layouts.app')
@section('content')
<div class="row">
    <div class="container-fluid row">
      @foreach($director as $direct)
        <div class="movie">
          <div class="col-md-3">
          @if($direct->IMAGEPATH == "")
            <a href="/movie/{{ $direct->ID }}">  <img class="img-movie img-thumbnail" src="/storage/posters/marina.jpg" style="width:170px;height:250px" alt="default movie image" /> </a>
          @else
            <a href="/movie/{{ $direct->ID }}">  <img class=" img-movie img-thumbnail img-responsive" style="width:170px;height:250px" src="/storage/posters/{{ $direct->IMAGEPATH }}" /> </a>
          @endif
        <p>{{ $direct->TITLE }}</p>
          <p>{{ $direct->YEAR }}</p>


        </div>
        </div>
@endforeach
      </div>
    </div>
    <div>
      {{ $director->links() }}
    </div>

@endsection
