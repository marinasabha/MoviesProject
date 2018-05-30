@extends('layouts.app')
@section('content')
<div class="row">
    <div class="container-fluid row">
      @foreach($director as $direct)
        <div class="movie">
          <div class="col-md-3" style="height:350px">
          @if($direct->IMAGEPATH == "")
            <a href="/movie/{{ $direct->ID }}">  <img class="img-movie img-thumbnail" src="/storage/posters/marina.jpg" style="width:170px;height:250px" alt="default movie image" /> </a>
          @else
            <a href="/movie/{{ $direct->ID }}">  <img class=" img-movie img-thumbnail img-responsive" style="width:170px;height:250px" src="/storage/posters/{{ $direct->IMAGEPATH }}" /> </a>
          @endif
          <p>&nbsp</p>
        <p style="height:20px ;color:white;">{{ $direct->TITLE }}</p>
          <p style="height:20px ;color:white;">{{ $direct->YEAR }}</p>


        </div>
        </div>
@endforeach
      </div>
    </div>
    <div>
      {{ $director->links() }}
    </div>

@endsection
