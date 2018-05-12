@extends('layouts.app')
@section('content')

<?php
 function checked ($id,$value)
 {
   if(\App\Collection::where('movie_id',$id)->where('user_id',Auth::user()->id)->count()){
     $rate=\App\Collection::where('movie_id',$id)->where('user_id',Auth::user()->id)->get();
     foreach($rate as $rate_value){
       if ($rate_value->RATING==$value){
         return 'checked';
       }
     }
  }
     else {
       return '';
     }
   }

 ?>


    <div class="row">
      <div class="col-md-3">
 @if($order[0]->IMAGEPATH == "")
  <img class=" img-movie img-thumbnail" src="/storage/posters/marina.jpg" style="width:250px;height:350px" alt="default movie image" />
@else
  <img class=" img-movie img-thumbnail" style="width:250px;height:350px" src="/storage/posters/{{ $order[0]->IMAGEPATH }}" />
@endif
</div>
  <div class="col-md-3">
<p style="color:white" > <strong>{{ $order[0]->TITLE }}</strong></p>
<p style="color:red">{{ $order[0]->YEAR }}</p>
 <p style="color:green">{{ $order[0]->GENERS }}</p>
 <p style="color:white"><strong>IMDB_LINK :</strong> <a href= "{{ $order[0]->IMDB_LINK }}" target="_blank">   <img class="img-movie" src="/storage/posters/imdb.jpg" style="width:20px;height:20px" alt="imdb image" /> </a> </p>
<p> {{ $order[0]->DESCRIBTION }}</p>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  @guest
  @else
<div class="leave-rating margin-bottom-30"style="height:50px">
							<input type="radio" name="rating" class="rate" id="rating-1" value="5" {{checked($order[0]->ID,5)}}/>
							<label for="rating-1" class="fa fa-star"></label>
							<input type="radio" name="rating" class="rate" id="rating-2" value="4" {{checked($order[0]->ID,4)}}/>
							<label for="rating-2" class="fa fa-star "></label>
							<input type="radio" name="rating" class="rate" id="rating-3" value="3" {{checked($order[0]->ID,3)}}/>
							<label for="rating-3" class="fa fa-star"></label>
							<input type="radio" name="rating" class="rate" id="rating-4" value="2" {{checked($order[0]->ID,2)}}/>
							<label for="rating-4" class="fa fa-star"></label>
							<input type="radio" name="rating" class="rate" id="rating-5" value="1" {{checked($order[0]->ID,1)}}/>
							<label for="rating-5" class="fa fa-star"></label>
						</div>
<script>
            $(document).ready(function(){

            $('.leave-rating input').change(function () {
            		var $radio = $(this);

            		$('.leave-rating .selected').removeClass('selected');
            		$radio.closest('label').addClass('selected');

                $.ajaxSetup({
                  headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         }
                  });
                $.ajax({
                  type:"POST",
                  url:'/insertRat',
                  data:{'RATING':$radio.val(),'movie_id':{{ $order[0]->ID }}},
                    dataType: "json",
                    error: function (request, error) {
                alert(error);

                  },

                    success: function(result){
                    console.log(result);

                  }
    });
            	});

});
</script>

  @endguest





<p style="color:white" > <strong> Director : </strong><a href="/director/{{ $order[0]->DIRECTOR }}"> </p>
 <p style="color:black" class="img-movie" >{{ $order[0]->DIRECTOR }}</p> </a>
<div style="color:white">
  <strong> Actors : </strong>
<a  href="/actor/{{ $order[0]->ACTOR_1 }}"><p class="img-movie" style="color:red"> {{ $order[0]->ACTOR_1 }}</p> </a>
<a  href="/actor/{{ $order[0]->ACTOR_2 }}"> <p class="img-movie"  style="color:green">{{ $order[0]->ACTOR_2 }}</p> </a>
<a  href="/actor/{{ $order[0]->ACTOR_3 }}"> <p class="img-movie" style="color:black"> {{ $order[0]->ACTOR_3 }}</p> </a>
</div>
</div>
</div>
@endsection
