@extends('layouts.app')
@section('content')
<div class="row">
@foreach ($movies->chunk(4) as $chunk)
    <div class="container-fluid row">
      @foreach($chunk as $movie)
        @include('layouts.movie', ["movie" => $movie])
      @endforeach
      </div>
@endforeach
@endsection
