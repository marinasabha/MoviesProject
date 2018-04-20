@extends('layouts.app')
@section('content')
<div class="row">
  <p> </p>
@foreach ($movies as $movie)
@include('movie', ["movie" => $movie])


@endforeach





@endsection
