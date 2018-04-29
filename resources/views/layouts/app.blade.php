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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

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

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
</body>
</html>
