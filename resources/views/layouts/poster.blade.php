@extends('layouts.app')
@section('content')
@if($order->IMAGEPATH == "")
  <img src="/storage/posters/1.jpg" style="width:140px;height:170px" alt="default movie image" />
@else
  <img class="img-responsive" style="width:140px;height:170px" src="/storage/posters/{{ $order->IMAGEPATH }}" />
@endif
<a href=""><p>{{ $order->TITLE }}</p></a>
<p>{{ $order->YEAR }}</p>
<p>
$order </p>

@endsection
