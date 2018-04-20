@extends('layouts.app')
@section('content')

@foreach ($movies as $movie)
{{ $movie->TITLE }}
@include('movie', ["movie" => $movie])


@endforeach





@endsection
