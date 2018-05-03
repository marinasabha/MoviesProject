<html lang="en">

<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/fa.css">
    <link rel="stylesheet" href="css/1.css">
    <link rel="stylesheet" href="css/2.css">
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
                        <input id="quick-search-input" name="query" autocomplete="off" type="search" placeholder="Quick search">
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
            <div id="mobile-search-input" class="hidden-md hidden-lg">
                <form method="POST" action="7MRP7ygq7BiW3E09NC&amp;b=1" accept-charset="UTF-8">
                    <input name="_token" type="hidden" value="8e55f60e493ddda2b182bd4dd2c5e8a06e29014786436b3959e939350fbfde84">
                    <div class="input-group container search-query">
                        <input class="form-control" placeholder="Search for a movie…" autocorrect="off" autocomplete="off" name="keyword" type="search">
                        <span class="input-group-btn"> <button class="btn btn-success" type="submit">Search</button> </span>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-10">
                                <div class="selects-container">
                                    <p>Quality:</p>
                                    <select name="quality">
                                        <option value="all" selected="selected">All</option>
                                        <option value="720p">720p</option>
                                        <option value="1080p">1080p</option>
                                        <option value="3D">3D</option>
                                    </select>
                                </div>
                                <div class="selects-container">
                                    <p>Genre:</p>
                                    <select name="genre">
                                        <option value="all" selected="selected">All</option>
                                        <option value="action">Action</option>
                                        <option value="adventure">Adventure</option>
                                        <option value="animation">Animation</option>
                                        <option value="biography">Biography</option>
                                        <option value="comedy">Comedy</option>
                                        <option value="crime">Crime</option>
                                        <option value="documentary">Documentary</option>
                                        <option value="drama">Drama</option>
                                        <option value="family">Family</option>
                                        <option value="fantasy">Fantasy</option>
                                        <option value="film-noir">Film-Noir</option>
                                        <option value="game-show">Game-Show</option>
                                        <option value="history">History</option>
                                        <option value="horror">Horror</option>
                                        <option value="music">Music</option>
                                        <option value="musical">Musical</option>
                                        <option value="mystery">Mystery</option>
                                        <option value="news">News</option>
                                        <option value="reality-tv">Reality-TV</option>
                                        <option value="romance">Romance</option>
                                        <option value="sci-fi">Sci-Fi</option>
                                        <option value="sport">Sport</option>
                                        <option value="talk-show">Talk-Show</option>
                                        <option value="thriller">Thriller</option>
                                        <option value="war">War</option>
                                        <option value="western">Western</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-10">
                                <div class="selects-container">
                                    <p>Rating:</p>
                                    <select name="rating">
                                        <option value="0" selected="selected">All</option>
                                        <option value="9">9+</option>
                                        <option value="8">8+</option>
                                        <option value="7">7+</option>
                                        <option value="6">6+</option>
                                        <option value="5">5+</option>
                                        <option value="4">4+</option>
                                        <option value="3">3+</option>
                                        <option value="2">2+</option>
                                        <option value="1">1+</option>
                                    </select>
                                </div>
                                <div class="selects-container selects-container-last">
                                    <p>Order By:</p>
                                    <select name="order_by">
                                        <option value="latest" selected="selected">Latest</option>
                                        <option value="oldest">Oldest</option>
                                        <option value="seeds">Seeds</option>
                                        <option value="peers">Peers</option>
                                        <option value="year">Year</option>
                                        <option value="rating">Rating</option>
                                        <option value="likes">Likes</option>
                                        <option value="alphabetical">Alphabetical</option>
                                        <option value="downloads">Downloads</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="ac-results hidden-sm hidden-xs">
                <ul></ul>
            </div>

            <div class="container home-content">
                <div class="hidden-xs hidden-sm">
                    <h1>YIFY movies: quality &amp; small size YTS movies</h1>
                    <p>
                        Welcome to <span style="font-weight:bold; color: #6AC045">YTS.AM</span> | YTS.AG, the only official source for YTS YIFY movies. YIFY movies are best known for the excellent <span style="font-weight:bold; color: #6AC045">BluRay</span>                        quality at small file-size, which can be downloaded fast for free. YTS movies are encoded using x264 codec and MP4 container for best compatibility with all devices, so all users around the world can download <span style="font-weight:bold; color: #6AC045">YIFY</span>                        torrents and enjoy the movies.
                    </p>
                </div>

            </div>
            <div class="content-dark">
                <div class="container home-content">
                    <div class="home-movies">
                        <div class="row">
                            <h2>Latest YIFY Movies Torrents <a href="">Browse All</a></h2>
                        </div>
                        <div class="row">
                            <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4">
                                <a href="details.html" class="browse-movie-link">
                                    <figure>
                                        <img class="img-responsive" src="img/blk-1.jpg" alt="Fifty Shades Freed (2018) download" width="210" height="315">
                                        <figcaption class="hidden-xs hidden-sm">
                                            <span class="icon-star"></span>
                                            <h4 class="rating">4.4 / 10</h4>
                                            <h4>Drama</h4>
                                            <h4>Romance</h4>
                                            <span class="button-green-download2-big">View Details</span>
                                        </figcaption>
                                    </figure>
                                </a>
                                <div class="browse-movie-bottom">
                                    <a href="details.html" class="browse-movie-title">Fifty Shades Freed</a>
                                    <div class="browse-movie-year">2018</div>
                                </div>
                            </div>
                            <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4">
                                <a href="details.html" class="browse-movie-link">
                                    <figure>
                                        <img class="img-responsive" src="img/blk-2.jpg" alt="12 Strong (2018) download" width="210" height="315">
                                        <figcaption class="hidden-xs hidden-sm">
                                            <span class="icon-star"></span>
                                            <h4 class="rating">6.6 / 10</h4>
                                            <h4>Action</h4>
                                            <h4>Drama</h4>
                                            <span class="button-green-download2-big">View Details</span>
                                        </figcaption>
                                    </figure>
                                </a>
                                <div class="browse-movie-bottom">
                                    <a href="details.html" class="browse-movie-title">12 Strong</a>
                                    <div class="browse-movie-year">2018</div>
                                </div>
                            </div>
                            <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4">
                                <a href="details.html" class="browse-movie-link">
                                    <figure>
                                        <img class="img-responsive" src="img/blk-3.jpg" alt="Den of Thieves (2018) download" width="210" height="315">
                                        <figcaption class="hidden-xs hidden-sm">
                                            <span class="icon-star"></span>
                                            <h4 class="rating">7 / 10</h4>
                                            <h4>Action</h4>
                                            <h4>Crime</h4>
                                            <span class="button-green-download2-big">View Details</span>
                                        </figcaption>
                                    </figure>
                                </a>
                                <div class="browse-movie-bottom">
                                    <a href="details.html" class="browse-movie-title">Den of Thieves</a>
                                    <div class="browse-movie-year">2018</div>
                                </div>
                            </div>
                            <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4">
                                <a href="details.html" class="browse-movie-link">
                                    <figure>
                                        <img class="img-responsive" src="img/blk-4.jpg" alt="Maze Runner: The Death Cure (2018) download" width="210" height="315">
                                        <figcaption class="hidden-xs hidden-sm">
                                            <span class="icon-star"></span>
                                            <h4 class="rating">6.4 / 10</h4>
                                            <h4>Action</h4>
                                            <h4>Sci-Fi</h4>
                                            <span class="button-green-download2-big">View Details</span>
                                        </figcaption>
                                    </figure>
                                </a>
                                <div class="browse-movie-bottom">
                                    <a href="details.html" class="browse-movie-title">Maze Runner: The Death Cure</a>
                                    <div class="browse-movie-year">2018</div>
                                </div>
                            </div>
                            <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4 hidden-sm hidden-xs">
                                <a href="details.html" class="browse-movie-link">
                                    <figure>
                                        <img class="img-responsive" src="img/blk-1.jpg" alt="Fifty Shades Freed (2018) download" width="210" height="315">
                                        <figcaption class="hidden-xs hidden-sm">
                                            <span class="icon-star"></span>
                                            <h4 class="rating">4.4 / 10</h4>
                                            <h4>Drama</h4>
                                            <h4>Romance</h4>
                                            <span class="button-green-download2-big">View Details</span>
                                        </figcaption>
                                    </figure>
                                </a>
                                <div class="browse-movie-bottom">
                                    <a href="details.html" class="browse-movie-title">Fifty Shades Freed</a>
                                    <div class="browse-movie-year">2018</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4">
                                <a href="details.html" class="browse-movie-link">
                                    <figure>
                                        <img class="img-responsive" src="img/blk-1.jpg" alt="Fifty Shades Freed (2018) download" width="210" height="315">
                                        <figcaption class="hidden-xs hidden-sm">
                                            <span class="icon-star"></span>
                                            <h4 class="rating">4.4 / 10</h4>
                                            <h4>Drama</h4>
                                            <h4>Romance</h4>
                                            <span class="button-green-download2-big">View Details</span>
                                        </figcaption>
                                    </figure>
                                </a>
                                <div class="browse-movie-bottom">
                                    <a href="details.html" class="browse-movie-title">Fifty Shades Freed</a>
                                    <div class="browse-movie-year">2018</div>
                                </div>
                            </div>
                            <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4">
                                <a href="details.html" class="browse-movie-link">
                                    <figure>
                                        <img class="img-responsive" src="img/blk-2.jpg" alt="12 Strong (2018) download" width="210" height="315">
                                        <figcaption class="hidden-xs hidden-sm">
                                            <span class="icon-star"></span>
                                            <h4 class="rating">6.6 / 10</h4>
                                            <h4>Action</h4>
                                            <h4>Drama</h4>
                                            <span class="button-green-download2-big">View Details</span>
                                        </figcaption>
                                    </figure>
                                </a>
                                <div class="browse-movie-bottom">
                                    <a href="details.html" class="browse-movie-title">12 Strong</a>
                                    <div class="browse-movie-year">2018</div>
                                </div>
                            </div>
                            <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4">
                                <a href="details.html" class="browse-movie-link">
                                    <figure>
                                        <img class="img-responsive" src="img/blk-3.jpg" alt="Den of Thieves (2018) download" width="210" height="315">
                                        <figcaption class="hidden-xs hidden-sm">
                                            <span class="icon-star"></span>
                                            <h4 class="rating">7 / 10</h4>
                                            <h4>Action</h4>
                                            <h4>Crime</h4>
                                            <span class="button-green-download2-big">View Details</span>
                                        </figcaption>
                                    </figure>
                                </a>
                                <div class="browse-movie-bottom">
                                    <a href="details.html" class="browse-movie-title">Den of Thieves</a>
                                    <div class="browse-movie-year">2018</div>
                                </div>
                            </div>
                            <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4">
                                <a href="details.html" class="browse-movie-link">
                                    <figure>
                                        <img class="img-responsive" src="img/blk-4.jpg" alt="Maze Runner: The Death Cure (2018) download" width="210" height="315">
                                        <figcaption class="hidden-xs hidden-sm">
                                            <span class="icon-star"></span>
                                            <h4 class="rating">6.4 / 10</h4>
                                            <h4>Action</h4>
                                            <h4>Sci-Fi</h4>
                                            <span class="button-green-download2-big">View Details</span>
                                        </figcaption>
                                    </figure>
                                </a>
                                <div class="browse-movie-bottom">
                                    <a href="details.html" class="browse-movie-title">Maze Runner: The Death Cure</a>
                                    <div class="browse-movie-year">2018</div>
                                </div>
                            </div>
                            <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4 hidden-sm hidden-xs">
                                <a href="details.html" class="browse-movie-link">
                                    <figure>
                                        <img class="img-responsive" src="img/blk-1.jpg" alt="Fifty Shades Freed (2018) download" width="210" height="315">
                                        <figcaption class="hidden-xs hidden-sm">
                                            <span class="icon-star"></span>
                                            <h4 class="rating">4.4 / 10</h4>
                                            <h4>Drama</h4>
                                            <h4>Romance</h4>
                                            <span class="button-green-download2-big">View Details</span>
                                        </figcaption>
                                    </figure>
                                </a>
                                <div class="browse-movie-bottom">
                                    <a href="details.html" class="browse-movie-title">Fifty Shades Freed</a>
                                    <div class="browse-movie-year">2018</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container home-content">
                <div class="home-movies">
                    <div class="row">
                        <h2>Upcoming YIFY Movies <a href="7NRO71hLWYlw%3D%3D&amp;b=1">Request a Movie</a></h2>
                    </div>
                    <div class="row">
                        <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4">
                            <a href="details.html" class="browse-movie-link">
                                <figure>
                                    <img class="img-responsive" src="img/blk-1.jpg" alt="Fifty Shades Freed (2018) download" width="210" height="315">
                                    <figcaption class="hidden-xs hidden-sm">
                                        <span class="icon-star"></span>
                                        <h4 class="rating">4.4 / 10</h4>
                                        <h4>Drama</h4>
                                        <h4>Romance</h4>
                                        <span class="button-green-download2-big">View Details</span>
                                    </figcaption>
                                </figure>
                            </a>
                            <div class="browse-movie-bottom">
                                <a href="details.html" class="browse-movie-title">Fifty Shades Freed</a>
                                <div class="browse-movie-year">2018</div>
                            </div>
                        </div>
                        <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4">
                            <a href="details.html" class="browse-movie-link">
                                <figure>
                                    <img class="img-responsive" src="img/blk-2.jpg" alt="12 Strong (2018) download" width="210" height="315">
                                    <figcaption class="hidden-xs hidden-sm">
                                        <span class="icon-star"></span>
                                        <h4 class="rating">6.6 / 10</h4>
                                        <h4>Action</h4>
                                        <h4>Drama</h4>
                                        <span class="button-green-download2-big">View Details</span>
                                    </figcaption>
                                </figure>
                            </a>
                            <div class="browse-movie-bottom">
                                <a href="details.html" class="browse-movie-title">12 Strong</a>
                                <div class="browse-movie-year">2018</div>
                            </div>
                        </div>
                        <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4">
                            <a href="details.html" class="browse-movie-link">
                                <figure>
                                    <img class="img-responsive" src="img/blk-3.jpg" alt="Den of Thieves (2018) download" width="210" height="315">
                                    <figcaption class="hidden-xs hidden-sm">
                                        <span class="icon-star"></span>
                                        <h4 class="rating">7 / 10</h4>
                                        <h4>Action</h4>
                                        <h4>Crime</h4>
                                        <span class="button-green-download2-big">View Details</span>
                                    </figcaption>
                                </figure>
                            </a>
                            <div class="browse-movie-bottom">
                                <a href="details.html" class="browse-movie-title">Den of Thieves</a>
                                <div class="browse-movie-year">2018</div>
                            </div>
                        </div>
                        <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4">
                            <a href="details.html" class="browse-movie-link">
                                <figure>
                                    <img class="img-responsive" src="img/blk-4.jpg" alt="Maze Runner: The Death Cure (2018) download" width="210" height="315">
                                    <figcaption class="hidden-xs hidden-sm">
                                        <span class="icon-star"></span>
                                        <h4 class="rating">6.4 / 10</h4>
                                        <h4>Action</h4>
                                        <h4>Sci-Fi</h4>
                                        <span class="button-green-download2-big">View Details</span>
                                    </figcaption>
                                </figure>
                            </a>
                            <div class="browse-movie-bottom">
                                <a href="details.html" class="browse-movie-title">Maze Runner: The Death Cure</a>
                                <div class="browse-movie-year">2018</div>
                            </div>
                        </div>
                        <div class="browse-movie-wrap col-xs-10 col-sm-5 col-md-4 hidden-sm hidden-xs">
                            <a href="details.html" class="browse-movie-link">
                                <figure>
                                    <img class="img-responsive" src="img/blk-1.jpg" alt="Fifty Shades Freed (2018) download" width="210" height="315">
                                    <figcaption class="hidden-xs hidden-sm">
                                        <span class="icon-star"></span>
                                        <h4 class="rating">4.4 / 10</h4>
                                        <h4>Drama</h4>
                                        <h4>Romance</h4>
                                        <span class="button-green-download2-big">View Details</span>
                                    </figcaption>
                                </figure>
                            </a>
                            <div class="browse-movie-bottom">
                                <a href="details.html" class="browse-movie-title">Fifty Shades Freed</a>
                                <div class="browse-movie-year">2018</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container hidden-md hidden-lg">
                <div class="row">
                    <div class="mobile-footer">
                        <div class="col-sm-20">
                            <a href=""> <span class="glyphicon glyphicon-home"></span>
                                <p>Home</p>
                            </a>
                            <a href=""> <span class="glyphicon glyphicon-list-alt"></span>
                                <p>Browse</p>
                            </a>
                            <a href=""> <span class="glyphicon glyphicon-log-in"></span>
                                <p>Login</p>
                            </a>
                        </div>
                        <div class="col-sm-20">
                            <a href="7NRPjpkrKJlg%3D%3D&amp;b=1"> <span class="glyphicon glyphicon-user"></span>
                                <p>Register</p>
                            </a>
                            <a href="7NRO71hLWYlw%3D%3D&amp;b=1"> <span class="glyphicon glyphicon-asterisk"></span>
                                <p>Requests</p>
                            </a>
                            <a href="7MVPjnhLWYjW3cyQ%3D%3D&amp;b=1"> <span class="glyphicon glyphicon-pushpin"></span>
                                <p>Suggestions</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-20">
                            <ul class="text-center">
                                <li>YTS © 2011 - 2018</li>
                                <li>-</li>
                                <li><a href="7dTfDn&amp;b=1">Blog</a></li>
                                <li>-</li>
                                <li><a href="7bTPzh&amp;b=1">DMCA</a></li>
                                <li>-</li>
                                <li><a href="7eUfY%3D&amp;b=1">API</a></li>
                                <li>-</li>
                                <li><a href="7NUuythrOFgGc%3D&amp;b=1">RSS</a></li>
                                <li>-</li>
                                <li><a href="7cTvH0gKWY&amp;b=1">Contact</a></li>
                                <li>-</li>
                                <li><a href="">Browse Movies</a></li>
                                <li>-</li>
                                <li><a href="7NRO71hLWYlw%3D%3D&amp;b=1">Requests</a></li>
                                <li>-</li>
                                <li><a href="">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-20">
                            <ul class="text-center">
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>

</html>
