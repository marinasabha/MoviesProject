<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">

    <title>YTS.AG @yield('title')</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

  
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fa.css') }}" rel="stylesheet">
    <link href="{{ asset('css/1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/2.css') }}" rel="stylesheet">
    <style type="text/css"></style>

    <body>
        <header class="nav-bar">
            <div class="nav-logo pull-left">
                <a href=""><img src="img/logo.svg" alt="YIFY"></a>
            </div>
            <span class="header-slogan hidden-xs pull-left">HD movies at the smallest file size.</span>
            <div class="main-nav-links hidden-sm hidden-xs">
                <form method="post" action="" accept-charset="UTF-8" id="quick-search" name="quick-search"><input type="hidden" name="convertGET" value="1">
                    <div id="quick-search-container">
                        <!-- <input id="quick-search-input" name="query" autocomplete="off" type="search" placeholder="Quick search"> -->




                        <!-- Search Box -->
                          <div>
                            <select class="itemName form-control"style="width:300px" name="itemName"></select>
                            <a href="" id="search-btn" class="btn btn-success">quicksearch</a>
                            <a href="" id="suggestions" style="display: none;">Suggestions</a>
                        </div>

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




                        <div class="ajax-spinner" style="background-position: -144px 0px;"></div>

                    </div>
                </form>
                <ul class="nav-links">
                    <li><a href=""> Home </a></li>
                    <li><a href=""> Browse Movies </a></li>
                </ul>
                <ul class="nav-links nav-link-guest">
                    <li><a class="login-nav-btn" href="#" id="login-btn"> Login </a> &nbsp;|&nbsp;
                        <a class="register-nav-btn" href="#" id="register-btn"> Register </a></li>
                </ul>
            </div>
            <div class="nav-mobile-buttons hidden-md hidden-lg">
                <a class="touchable" id="mobile-search-btn" href=""> <span class="glyphicon glyphicon-search"></span> </a>
                <a class="touchable" href=""> <span class="glyphicon glyphicon-list-alt"></span> </a>
                <a class="touchable" href=""> <span class="glyphicon glyphicon-user"></span> </a>
            </div>
        </header>

        <div class="modal modal-auth">
            <div id="modal-background"></div>
            <div class="modal-container">
                <div class="modal-switcher">
                    <span id="modal-login"> Login </span>
                    <span id="modal-register"> Register </span>
                </div>
                <div class="modal-content">
                    <div class="modal-login-content">
                        <form method="POST" action="" accept-charset="UTF-8" autocorrect="off" autocapitalize="off" spellcheck="off">
                            <span class="error-msg"></span>
                            <div class="inner-addon">
                                <span class="glyphicon glyphicon-user"></span>
                                <input placeholder="Username or Email" autocorrect="off" autocapitalize="off" spellcheck="off" name="username" type="text">
                            </div>
                            <div class="inner-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                                <input placeholder="Password" autocorrect="off" autocapitalize="off" spellcheck="off" name="password" type="password" value="">
                            </div>
                            <button class="button-green-download2-big" type="button">Login</button>
                        </form>
                    </div>
                    <div class="modal-register-content">
                        <form method="POST" action="" accept-charset="UTF-8" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="off">
                            <span class="error-msg"></span>
                            <div class="inner-addon">
                                <span class="glyphicon glyphicon-user"></span>
                                <input placeholder="Username" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="off" name="username" type="text">
                            </div>
                            <div class="inner-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                                <input placeholder="E-Mail" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="off" name="email" type="email">
                            </div>
                            <div class="inner-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                                <input placeholder="Password" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="off" name="password" type="password" value="">
                            </div>
                            <div class="inner-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                                <input placeholder="Confirm Password" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="off" name="password_confirmation" type="password" value="">
                            </div>
                            <button class="button-green-download2-big" type="button">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="background-image" style="background: url(img/background.jpg); no-repeat center center; background-size: cover; -webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;"></div>
        <div id="background-overlay"></div>

        <div class="main-content">
            @yield('content')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
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
        <script src="js/scripts.js"></script>
    </body>

</html>
