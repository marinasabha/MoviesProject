@extends('layouts.app')
@section('content')
    <div class="row">
      <div class="col-md-3">
 @if($order[0]->IMAGEPATH == "")
  <img src="/storage/posters/1.jpg" style="width:250px;height:350px" alt="default movie image" />
@else
  <img class="img-responsive" style="width:250px;height:350px" src="/storage/posters/{{ $order[0]->IMAGEPATH }}" />
@endif
</div>
  <div class="col-md-3">
<a href=""><p > <strong>{{ $order[0]->TITLE }}</strong></p></a>
<p style="color:gray">{{ $order[0]->YEAR }}</p>
<a href=""> <p style="color:gray">{{ $order[0]->GENERS }}</p> </a>
<strong>IMDB_LINK :</strong> <a href= ""> <p style="color:gray"> {{ $order[0]->IMDB_LINK }}</p> </a>
<p> {{ $order[0]->DESCRIBTION }}</p>
 <strong> Director : </strong><a href=""> <p style="color:gray">{{ $order[0]->DIRECTOR }}</p> </a>
<div style="color:gray">
  <strong> Actors : </strong>
<a href=""><p style="color:gray"> {{ $order[0]->ACTOR_1 }}</p> </a>
<a href=""> <p style="color:gray">{{ $order[0]->ACTOR_2 }}</p> </a>
<a href=""> <p style="color:gray"> {{ $order[0]->ACTOR_3 }}</p> </a>
</div>
</div>
</div>

@endsection
