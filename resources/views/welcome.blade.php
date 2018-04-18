<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!--Styles
        <style>


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }



            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
        <style>
        html, body {

            background-color: #474e5d;
            color: #ffffff;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin:100;
        }
        </style>
        <html>

    <head>
    </head>


    <body>
      <div style="position:absolute;right:250px;top:12px;z-index:10px">
      <input type="text" class="key">
      <button class="mybtn">Search</button>
    </div>
    <div class="row">

      <div class="mvs">
<div class="col-md-8 col-md-8 col-md-8 col-md-8">
</div>
</div>
</div>
<div class="nav-logo pull-left">
 <!--<a href="http://127.0.0.1:8000"><img style="max-width:200px;max-height:200px"src="http://127.0.0.1:8000/storage/posters/1.jpg"></a> -->
</div>
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

      <script>

        $(document).ready(function(){
        $('.mybtn').on('click',function(){
          $.ajax({
            type: "GET",
            url: window.location + 'api/search?q='+ $('.key').val(),
          data: 	{  },
            dataType: "json",
            error: function (request, error) {
              console.log(request);
            },
            success: function(result){
              $('.mvs').html("");
        		  result['data'].forEach(function(elem) {

                if (elem['IMAGEPATH']== '')
                { elem['IMAGEPATH']='17'; }
                var x = `
                  <a href=""> <img class="img-responsive" src=" `+ window.location +`storage/posters/`+elem['IMAGEPATH']+`.jpg"  alt="marina" width="170" height="255"> </a>
            <p><strong>Title : </strong> ` + elem['TITLE'] + `</p>
           <p><strong>Year : </strong> ` + elem['YEAR'] + `</p>
                 </div>

                     `;

$('.mvs').append(x);
                });

        			}



          });
        });

        });

    </script>


    </body>


  </html>
    </head>
    <body>
           <div style="position:absolute;right:100px;top:18px;z-index:10px">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>

                    @endauth
                </div>
            @endif
</div>
        <!--    <div class="content">
                <div class="title m-b-md">
                    Movies
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
    </body>
</html>
