<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'MOVIE' }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>



    <style>
    html,body {

        background-color: #474e5d;
        color: black;
        font-weight: 100;
        height: 100;
      }
      .select2-selection__rendered img{
 max-width: 12px!important;
}
.select2-results__option img{
    max-width: 40px!important;

}

.drop_menu {
 display: inline-block;
 width: 130px;
 margin-right: 30px;
 float: left;

}
.drop_menu-last {
 margin-left: 20px !important;
 margin:auto;
}
.leave-rating label {
	font-size: 24px;
	float: left;
	letter-spacing: 4px;
	color: #dadada;
	cursor: pointer;
	transition: 0.3s;
}

.leave-rating label:hover,
.leave-rating label:hover ~ label {
	color: #ffc600 !important;
}
.fa-star:before {
    content: "\f005";
}
.leave-rating input[type="radio"]:checked ~ label {
    color: #ffc600;
}
    </style>
</head>
<body>


    <div id="app">

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
           <!-- Collapsed Hamburger -->
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                   </button>


                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ 'Movies' }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->

                    <ul class="nav navbar-nav navbar-right">
                      <!-- Search Box -->
                        <li style="padding:10px">
                          <div>
                      <select class="itemName form-control"style="width:400px" name="itemName"></select>

                      </div>
                    </li>
                    <li> <a href="" id="search-btn">quicksearch</a></li>

                    <script>
                    function formatData (data) {
                       if (!data.id) { return data.text; }
                    if ( data.image== '' ) { data.image ='marina.jpg'; }
                    var $result= $(
                          '<a href="/movie/'+data.id+'"> <div> <span style ="color:black"><img style="max-width:40px" src="/storage/posters/'+ data.image +'"/>'+ " " +data.text +'</span> <div> </a>'
                          );
                      $('#search-btn').attr('href','/movie/'+data.id+'')
                      return $result;
                  };

                        $('.itemName').select2({

                            placeholder: 'Select an item',
                            templateResult: formatData,
                            templateSelection: formatData,
                            ajax: {
                                url: '/quick',
                                dataType: 'json',
                                delay: 250,
                                processResults: function (data) {
                                    return {
                                        results:  $.map(data, function (item) {
                                            return {

                                                text: item.TITLE,
                                                image: item.IMAGEPATH,
                                                id: item.ID

                                            }
                                        })
                                    };
                                },
                                cache: true
                            }
                        });

                        </script>

                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </li>
                                </ul>
                            </li>
                            <li> <a href="" id="suggestions">Suggestions</a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



        @yield('content')

</body>
</html>
