<!doctype html>

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
    <style type="text/css">
        a:hover {
            border-color: #6ac045 !important;
        }

        i {
            color: #6ac045 !important;
        }

        .fddc {
            top: 10px;
            margin: 0;
            padding: 5px;
            width: 280px;
            text-align: center;
            background: #509B2F;
            color: #fff;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            display: block;
            font-weight: bold;
            font-size: 16px;
            position: relative;
            transition: all 300ms ease;
        }

        .v211 {
            margin-top: 20px;
        }
    </style>

    <body>
        <header class="nav-bar">
            <div class="nav-logo pull-left">
                <a href="/process.php?d=My1Q6HnB2ZE9mK4%3D&amp;b=1"><img src="img/logo.svg" alt="YIFY"></a>
            </div>
            <span class="header-slogan hidden-xs pull-left">HD movies at the smallest file size.</span>
            <div class="main-nav-links hidden-sm hidden-xs">
                <form method="post" action="/process.php?d=My1Q6HnB2ZE9mK7MRP7ygq7BiW3E09NC&amp;b=1" accept-charset="UTF-8" id="quick-search" name="quick-search"><input type="hidden" name="convertGET" value="1">
                    <div id="quick-search-container">
                        <input id="quick-search-input" name="query" autocomplete="off" type="search" placeholder="Quick search">
                        <div class="ajax-spinner" style="background-position: -144px 0px;"></div>
                    </div>
                </form>
                <ul class="nav-links">
                    <li><a href="/process.php?d=My1Q6HnB2ZE9mK4%3D&amp;b=1"> Home </a></li>
                    <li><a href="/process.php?d=My1Q6HnB2ZE9mK7dU%2FD3kqPBiW3E09NC&amp;b=1"> Browse Movies </a></li>
                </ul>
                <ul class="nav-links nav-link-guest">
                    <li><a class="login-nav-btn" href=""> Login </a> &nbsp;|&nbsp; <a class="register-nav-btn" href=""> Register </a></li>
                </ul>
            </div>
            <div class="nav-mobile-buttons hidden-md hidden-lg">
                <a class="touchable" id="mobile-search-btn" href=""> <span class="glyphicon glyphicon-search"></span> </a>
                <a class="touchable" href="/process.php?d=My1Q6HnB2ZE9mK7dU%2FD3kqPBiW3E09NC&amp;b=1"> <span class="glyphicon glyphicon-list-alt"></span> </a>
                <a class="touchable" href="/process.php?d=My1Q6HnB2ZE9mK7TTvjpjw%3D%3D&amp;b=1"> <span class="glyphicon glyphicon-user"></span> </a>
            </div>
        </header>

        <div id="background-image" style="background: url(img/background.jpg); no-repeat center center; background-size: cover; -webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;"></div>
        <div id="background-overlay"></div>

        <div class="main-content">
            <div id="mobile-search-input" class="hidden-md hidden-lg">
                <form method="POST" action="" accept-charset="UTF-8">
                    <input name="_token" type="hidden" value="a3919736da1a6361ed682f1ad7c54292a03cdf3e7bd7628b68c3c20b96e2cc9a">
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

            <div class="container" id="movie-content" itemscope="" itemtype="/Movie">
                <div class="row">
                    <div id="mobile-movie-info" class="visible-xs col-xs-20">
                        <h1 itemprop="name">The Posthuman Project</h1>
                        <h2>2014</h2>
                        <h2>Action / Adventure / Comedy / Sci-Fi</h2>
                    </div>
                    <div id="movie-poster" class="col-xs-10 col-sm-6 col-lg-5">
                        <img class="img-responsive" itemprop="image" src="img/medium-cover.jpg" alt="The Posthuman Project (2014) download">
                        <a class="torrent-modal-download button-green-download2-big hidden-xs hidden-sm" href=""><span class="icon-in"></span>Download</a>
                        <div class="addthis_sharing_toolbox" style="margin-top: 15px;"></div>
                    </div>
                    <div class="modal modal-download hidden-xs hidden-sm">
                        <div class="modal-container">
                            <div class="modal-title"> Select movie quality </div>
                            <span class="modal-close glyphicon glyphicon-remove"></span>
                            <div class="modal-content">
                                <div class="modal-torrent">
                                    <div class="modal-quality" id="modal-quality-720p"><span>720p</span></div>
                                    <p>File size</p>
                                    <p class="quality-size">813.04 MB</p>
                                    <a download="" class="download-torrent button-green-download2-big" href="/process.php?d=My1Q6HnB2ZE9mK7LTu3yhKiYy2bdzdhdVU4Gz%2FJ71QK0pOyOQD5XCjcpnKsSaUv1eGZRTqJ%2BIrV1vNb8qjVgkfDtugk%3D&amp;b=1" rel="nofollow" title="Download The Posthuman Project 720p Torrent"><span class="icon-in"></span>Download</a>
                                    <a data-torrent-id="14255" href="/process.php?d=My1Q6HnB2ZE9mK7STunphOmBhWXc38ILBVcW3b85j3nnk7DXQjVWe0Ys6qcRFE38eRdVPd54IrR9vKf%2B3EZll4fvxw%2BdCXqpbu4bKOnhe40FdFmvwlQPJP6Tf4h8igvywGBlMvRwe3OUp%2BSwqD8PR7Lm%2FORsqraGWIUeNuYv5y%2FppOAGxEY0KgNqnJBWm82hHKA95Ajf74de1L1qrRx5gnCvBJucbRyvscWn5coh9l%2B5cptD9Yes%2BrqOoL4I71pYkP%2Fk1bx%2BgakX286Oa4%2Fb1xtV3J3%2BLARaPBw4gGtUQv71OJ2EK9NAtkmGTfkCXa4ad%2Bdd1UNGKSL9P6aOcK9YdE15LUuHNHdAPqlmVveo4mhbAz3QzIEijzbTJ%2BDAmQBvj7tzwPN9ugY79kXn9b8OtbBHDIVr%2BuDWAJqmc6GDS4xDFj8ZUVHh4ZzCHzSHnwRQaTCUBFvM%2BGtgcbe9WEyvNX2EqGK6i6tdFndSx6pvrOjXf7SFCz5hLyDs5qy4yR6swKdaGwEOORsp47KhcVBOtCS%2FJselr9rURsZdxZMtmgHfrw%3D%3D&amp;b=1"
                                        class="magnet-download download-torrent magnet" title="Download The Posthuman Project 720p Magnet" rel="nofollow"><span>Magnet</span></a>
                                </div>
                                <div class="modal-torrent">
                                    <div class="modal-quality" id="modal-quality-1080p"><span>1080p</span></div>
                                    <p>File size</p>
                                    <p class="quality-size">1.51 GB</p>
                                    <a download="" class="download-torrent button-green-download2-big" href="/process.php?d=My1Q6HnB2ZE9mK7LTu3yhKiYy2bdzdhdVU4Gz%2F8J2XPE1uyPTDhXeEIt7aUTaE6PeRFSSaF4IsQGvaL83kcV5vWcsgo%3D&amp;b=1" rel="nofollow" title="Download The Posthuman Project 1080p Torrent"><span class="icon-in"></span>Download</a>
                                    <a data-torrent-id="14256" href="/process.php?d=My1Q6HnB2ZE9mK7STunphOmBhWXc38ILBVcW3b85j3nnk7DXQjgkdzdcmKcQGEv8C2JRTNB5I7EHvdD920Vjl%2FacxnudfQjcGetqIOrhe40FdFmvwlQPJP6Tf4h8igvywGBlMvRwe3OUp%2BSwqD8PR7Lm%2FORsrLSOGNAOR4kh91jyqed7q0BWOnIIzpYZ09y1SbZPgB%2BrjJAq9bZptgdkgmekHpzBMxv9p7fQ6sUu6kjNVZRD9J2397zN8rhHp0tMxemWsasK4r5j6cidaYfVwEcUw4j1IA9HPAclgHxfWKS4NJ%2FMPaE5vl%2FUS7ZKTLpPYZU5wjclPlbPObWMeKFPKAB1MkuSI3ZGOb1lQavy%2FSZNcUrfw4493TCcb%2FHUzBYd66wHo%2BQJiAAo9E3p4uNMvLBBB4h8%2B76LEYm1dqyZXccCCypbRyOW7pPNAGaB0ExBfWWCdj%2FbjAh3BYH5HBLgJmqPp2G%2FwuZWW2Egt6hvqPmFefvNGio0OVKI8djb3mqexrRYEw8ZZVwu%2BaO2bVtftzKsJtyjstuJBs1MlIVf6gPfq30%3D&amp;b=1"
                                        class="magnet-download download-torrent magnet" title="Download The Posthuman Project 1080p Magnet" rel="nofollow"><span>Magnet</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="movie-info" class="col-xs-10 col-sm-14 col-md-7 col-lg-8 col-lg-offset-1" data-movie-id="7670">
                        <div class="hidden-xs">
                            <h1>The Posthuman Project</h1>
                            <h2>2014</h2>
                            <h2>Action / Adventure / Comedy / Sci-Fi</h2>
                        </div>
                        <p class="hidden-xs hidden-sm">
                            <em class="pull-left">Available in: &nbsp;</em>
                            <a href="/process.php?d=My1Q6HnB2ZE9mK7LTu3yhKiYy2bdzdhdVU4Gz%2FJ71QK0pOyOQD5XCjcpnKsSaUv1eGZRTqJ%2BIrV1vNb8qjVgkfDtugk%3D&amp;b=1" rel="nofollow" title="Download The Posthuman Project 720p Torrent">720p.WEB</a>
                            <a href="/process.php?d=My1Q6HnB2ZE9mK7LTu3yhKiYy2bdzdhdVU4Gz%2F8J2XPE1uyPTDhXeEIt7aUTaE6PeRFSSaF4IsQGvaL83kcV5vWcsgo%3D&amp;b=1" rel="nofollow" title="Download The Posthuman Project 1080p Torrent">1080p.WEB</a>
                            <br>
                        </p>
                        <div class="bottom-info">
                            <div class="rating-row">
                                <span title="Likes" class="icon icon-heart"></span>
                                <span id="movie-likes">0</span>
                            </div>
                            <div class="rating-row ">
                                <a class="icon" href="#" title="Rotten Tomatoes Audience - Spilled" target="_blank"> <img src="img/rt-certified-fresh.webp" alt="Rotten Tomatoes Audience - Spilled"> </a>
                                <span>54%</span><span class="hidden-xs"> - Audience</span>
                            </div>
                            <div class="rating-row" itemprop="aggregateRating" itemscope="" itemtype="/AggregateRating">
                                <a class="icon" href="/process.php?d=ejhQsHfChNYxkeORQvDtzrKFkG7XlcJFCBdR0f992Ww%3D&amp;b=1" title="IMDb Rating" target="_blank"> <img src="img/rt-upright.png" alt="IMDb Rating"> </a>
                                <span itemprop="ratingValue">3.8</span>
                                <span itemprop="bestRating" style="display: none;">10</span>
                                <span itemprop="ratingCount" style="display: none;">238</span>
                                <span class="hidden-xs icon-star"></span>
                            </div>

                            <div class="rating-row hidden-sm hidden-xs v211">
                            </div>
                            <p class="hidden-md hidden-lg">
                                <a href="/process.php?d=My1Q6HnB2ZE9mK7LTu3yhKiYy2bdzdhdVU4Gz%2FJ71QK0pOyOQD5XCjcpnKsSaUv1eGZRTqJ%2BIrV1vNb8qjVgkfDtugk%3D&amp;b=1" rel="nofollow" title="Download The Posthuman Project 720p Torrent"><span class="icon-in"></span>720p</a>
                                <a href="/process.php?d=My1Q6HnB2ZE9mK7LTu3yhKiYy2bdzdhdVU4Gz%2F8J2XPE1uyPTDhXeEIt7aUTaE6PeRFSSaF4IsQGvaL83kcV5vWcsgo%3D&amp;b=1" rel="nofollow" title="Download The Posthuman Project 1080p Torrent"><span class="icon-in"></span>1080p</a>
                            </p>
                        </div>
                    </div>
                    <div id="movie-related" class="col-md-6 hidden-xs hidden-sm">
                        <p>Similar Movies</p>
                        <a href="" title="Cars (2006)"><img src="img/similar-1.jpg" alt="Cars (2006) download"></a>
                        <a href="" title="Mrs. Doubtfire (1993)"><img src="img/similar-2.jpg" alt="Mrs. Doubtfire (1993) download"></a>
                        <a href="" title="Nightbreed (1990)"><img src="img/similar-3.jpg" alt="Nightbreed (1990) download"></a>
                        <a href="" title="From Here to Eternity (1953)"><img src="img/similar-4.jpg" alt="From Here to Eternity (1953) download"></a>
                    </div>
                </div>
                <div id="screenshots" class="row hidden-xs hidden-sm">
                    <div class="screenshot">
                        <a class="youtube cboxElement" href="/process.php?d=My1Q6HfC3ZElmvTLVP3lz6WDiS3X19RUXgANiZIvsSzphLiKDzIUKmsgmbRXQRGpWRoVeoYkFPEkioOg7iUzvcG75k2SCWr5WNlGYbOmZt4JBli8tmgPNu6keopxjUPbjzw%3D&amp;b=1" id="playTrailer"><span class="btn-play-trailer"></span></a>
                        <a class="screenshot-group imghov cboxElement" href="/process.php?d=My1Q6HnB2ZE9mK7eUuzllbXDjW%2FT3dNCFUINlqMukmzRj7zgLX4TLmtC%2BudTXBuuSFQ%2BOd5zUq4pmZSp%2Fy4iscG65lHcUSPsHINDYbg%3D&amp;b=1"><img src="img/medium-screenshot1.jpg" alt="The Usual Suspects (1995) download"></a>
                    </div>
                    <div class="screenshot">
                        <a class="screenshot-group imghov cboxElement" href="/process.php?d=My1Q6HnB2ZE9mK7eUuzllbXDjW%2FT3dNCFUINlqMukmzRj7zgLX4TLmtC%2BudTXBuuSFQ%2BOd5zUq4pmZSp%2Fy4iscG65lHcUSPsH4NDYbg%3D&amp;b=1"><img src="img/medium-screenshot2.jpg" alt="The Usual Suspects (1995) download"></a>
                    </div>
                    <div class="screenshot">
                        <a class="screenshot-group imghov cboxElement" href="/process.php?d=My1Q6HnB2ZE9mK7eUuzllbXDjW%2FT3dNCFUINlqMukmzRj7zgLX4TLmtC%2BudTXBuuSFQ%2BOd5zUq4pmZSp%2Fy4iscG65lHcUSPsHoNDYbg%3D&amp;b=1"><img src="img/medium-screenshot3.jpg" alt="The Usual Suspects (1995) download"></a>
                    </div>
                </div>
                <div class="row hidden-xs hidden-sm">
                    <div id="awn-z1849091"></div>
                </div>

                <div class="modal modal-parental-guide hidden-xs hidden-sm">
                    <div class="modal-container">
                        <div class="modal-title"> Parental Guide </div>
                        <span class="modal-close glyphicon glyphicon-remove"></span>
                        <div class="modal-content">
                            <div class="modal-loading-content">
                                <img src="/process.php?d=My1Q6HnB2ZE9mK7eUuzllbXDjW%2FT3dNCFVgHgrkilSaqhrPeACAVP25zx%2FdSAhmkWg%3D%3D&amp;b=1" alt="ajax spinner loading">
                                <p class="info-msg"> Loading, please wait </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="movie-sub-info" class="row">
                    <div id="synopsis" class="col-sm-10 col-md-13 col-lg-12">
                        <h3>Synopsis</h3>
                        <p class="hidden-sm hidden-md hidden-lg"> Denny Burke is finally about to graduate high school. Senior year has been one bad thing after another: a broken leg, a broken heart, and - worst of all - a broken home. With four of his closest friends, Denny goes on one last
                            rock-climbing trip to prove he's ready to start his adult life... On their trip the five teens receive a genetic boost beyond anything they'd ever imagined. Denny's soon faced with the first big decision of his adult life:
                            does he give up these powers and stay a normal teenager, or does he keep them... and graduate from the human race? </p>
                        <p class="hidden-xs"> Denny Burke is finally about to graduate high school. Senior year has been one bad thing after another: a broken leg, a broken heart, and - worst of all - a broken home. With four of his closest friends, Denny goes on one last
                            rock-climbing trip to prove he's ready to start his adult life... On their trip the five teens receive a genetic boost beyond anything they'd ever imagined. Denny's soon faced with the first big decision of his adult life:
                            does he give up these powers and stay a normal teenager, or does he keep them... and graduate from the human race? </p>
                        <p class="row hidden-xs hidden-sm"> <span class="green-text-link parental-guide-modal">Parental Guide</span> </p>
                        <p>
                            <br> <em>Uploaded By: <a href="/process.php?d=My1Q6HnB2ZE9mK7KUvryzqCegWff29g%3D&amp;b=1">FREEMAN</a> </em>
                            <br> <em>Downloaded 606 times</em>
                            <br> <span itemprop="dateCreated"><em>April 26, 2018 at 03:23 PM</em></span>
                        </p>
                    </div>
                    <div id="crew" class="col-sm-10 col-md-7 col-lg-offset-1">
                        <div class="directors">
                            <h3>Director</h3>
                            <div class="list-cast">
                                <div class="tableCell">
                                    <a class="avatar-thumb" href="/process.php?d=ejhQsHfChNYxkeORQvDtzqiNiWed1NsEDB1S1Ptyzg%3D%3D&amp;b=1" target="_blank" title="IMDb Profile"> <img src="img/actor-1.jpg" alt="Kyle William Roberts Picture"> </a>
                                </div>
                                <div class="list-cast-info tableCell">
                                    <a class="name-cast" href="/process.php?d=My1Q6HnB2ZE9mK7dU%2FD3kqPBiW3E09NCFWQbjK9u03PSjrXTEWwLajUt%2B%2F1CSQy5Tw%3D%3D&amp;b=1"><span itemprop="director" itemscope="" itemtype="/Person"><span itemprop="name">Kyle William Roberts</span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="actors">
                            <h3>Cast</h3>
                            <div class="list-cast">
                                <div class="tableCell">
                                    <a class="avatar-thumb" href="/process.php?d=ejhQsHfChNYxkeORQvDtzqiNiWed1NsCCBxV0Ppyzg%3D%3D&amp;b=1" target="_blank" title="IMDb Profile"> <img src="img/actor-2.jpg" alt="Rett Terrell Picture"> </a>
                                </div>
                                <div class="list-cast-info tableCell">
                                    <a class="name-cast" href="/process.php?d=My1Q6HnB2ZE9mK7dU%2FD3kqPBiW3E09NCFX0HlL5u03PRgqvNHWEK&amp;b=1"><span itemprop="actor" itemscope="" itemtype="/Person"><span itemprop="name">Rett Terrell</span></span></a> as
                                    Tim Finch
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="movie-tech-specs" class="row">
                    <h3 class="hidden-xs hidden-sm col-md-5">Tech specs</h3>
                    <div class="tech-spec-info col-xs-20">
                        <div class="row">
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"><span title="File Size" class="icon-folder"></span> 813.04 MB
                                <div></div>
                            </div>
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="Resolution" class="icon-expand"></span> 1280*640
                                <div></div>
                            </div>
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="Language" class="icon-volume-medium"></span> English
                                <div></div>
                            </div>
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="MPA Rating" class="icon-eye"></span> NR
                                <div></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="Subtitles" class="glyphicon glyphicon-subtitles"></span> <a href="/process.php?d=ejhQsHfChMY1k%2FjMVP30iLKAgXGc2dlcFUINlqMuzCrog7uQDHlUdzQsnKQY&amp;b=1" target="_blank">Subtitles</a>
                                <div class="hidden-md hidden-lg"></div>
                            </div>
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="Frame Rate" class="icon-film"></span> 23.976 fps
                                <div class="hidden-md hidden-lg"></div>
                            </div>
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="Runtime" class="icon-clock"></span> 1hr 33 min
                                <div class="visible-xs"></div>
                            </div>
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="Peers and Seeds" class="tech-peers-seeds">P/S</span> counting... </div>
                        </div>
                    </div>
                    <div class="tech-spec-info col-xs-20 hidden-tech-info">
                        <div class="row">
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"><span title="File Size" class="icon-folder"></span> 1.51 GB
                                <div></div>
                            </div>
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="Resolution" class="icon-expand"></span> 1920*960
                                <div></div>
                            </div>
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="Language" class="icon-volume-medium"></span> English
                                <div></div>
                            </div>
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="MPA Rating" class="icon-eye"></span> NR
                                <div></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="Subtitles" class="glyphicon glyphicon-subtitles"></span> <a href="/process.php?d=ejhQsHfChMY1k%2FjMVP30iLKAgXGc2dlcFUINlqMuzCrog7uQDHlUdzQsnKQY&amp;b=1" target="_blank">Subtitles</a>
                                <div class="hidden-md hidden-lg"></div>
                            </div>
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="Frame Rate" class="icon-film"></span> 23.976 fps
                                <div class="hidden-md hidden-lg"></div>
                            </div>
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="Runtime" class="icon-clock"></span> 1hr 33 min
                                <div class="visible-xs"></div>
                            </div>
                            <div class="tech-spec-element col-xs-20 col-sm-10 col-md-5"> <span title="Peers and Seeds" class="tech-peers-seeds">P/S</span> counting... </div>
                        </div>
                    </div>
                </div>
                <div id="movie-bottom" class="row">
                    <div id="movie-reviews" class="col-xs-20 col-md-10 col-md-offset-1 col-md-push-9">
                        <h3><span class="icon-star"></span>Movie Reviews</h3>
                        <div class="review">
                            <div class="review-properties">
                                Reviewed by <span class="review-author">Diane Alexander</span>
                                <span class="icon-star"></span>
                                <span class="review-rating">3 / 10</span>
                            </div>
                            <h4>UnProfessional Acting and DIrecting Make This Film A Complete Mess</h4>
                            <article class="readmore-js-section readmore-js-collapsed" style="height: 125px;">
                                <p>Firstly, that guy above me who wrote one review for IMDb - for this movie - and gave it a 10 - that guy just about admits to being on the crew of the film.Firstly, that guy above me who wrote one review for IMDb - for this
                                    movie - and gave it a 10 - that guy just about admits to being on the crew of the film.
                            </article><a href="#" class="readmore-js-toggle">Read More</a>
                        </div>
                        <div class="line"></div>
                        <div class="review">
                            <div class="review-properties">
                                Reviewed by <span class="review-author">MoreAir</span>
                                <span class="icon-star"></span>
                                <span class="review-rating">2 / 10</span>
                            </div>
                            <h4>Absolutely Terrible</h4>
                            <article class="readmore-js-section readmore-js-collapsed" style="height: 125px;">
                                <p>This film was absolutely horrible.<br><br>I'll get to the point. The plot was terrible. I would be surprised if anyone could make it past 20 minutes without turning this mess off. It was extremely predictable, and I do
                                    not see the point of watching a movie if you already know what is going to happen.</p>
                            </article><a href="#" class="readmore-js-toggle">Read More</a>
                        </div>
                        <div class="line"></div>
                        <div class="review">
                            <div class="review-properties">
                                Reviewed by <span class="review-author">gdespinoza</span>
                                <span class="icon-star"></span>
                                <span class="review-rating">8 / 10</span>
                            </div>
                            <h4>Pleasantly surprised</h4>
                            <article class="readmore-js-section readmore-js-collapsed" style="height: 125px;">
                                <p>We popped in the Blu-Ray and the menu came up as expected. What wasn't expected was the amount of work that went into the menu alone, and this surprise set the tone for what we'd soon discover was true of the entire movie!
                                    If I only had one word to sum up this film, it would have to be this: impressive. It delivered an entertaining and engaging story with a fairly high production quality for a tiny fraction of the budget of a mainstream
                                    production.
                                </p>
                            </article><a href="#" class="readmore-js-toggle">Read More</a>
                        </div>
                        <div class="line"></div>
                        <a class="more-reviews" href="/process.php?d=ejhQsHfChNYxkeORQvDtzrKFkG7XlcJFCBdR0f992Wz3gq%2FWHXoV&amp;b=1" target="_blank">Read more IMDb reviews</a>
                    </div>
                    <div id="movie-comments" class="col-xs-20 col-md-9 col-md-pull-11">
                        <h3><span class="icon-comment"></span><span id="comment-count">2</span> Comments</h3>
                        <div id="comments" class="comments-scroll ps-container">

                            <div class="comment" data-comment-id="35251529">
                                <a title="View profile" href="https://eu0.proxysite.com/process.php?d=My1Q6HnB2ZE9mK7KUvryzrWbhWzX3w%3D%3D&amp;b=1" class="avatar-thumb"><img alt="swanee profile" src="img/default_avatar.webp"></a>
                                <div class="comment-text">
                                    <div class="pull-right comment-likes"> <span class="comment-like-count">0</span> <span title="Likes" class="icon icon-heart2"></span> </div> <span><a href="https://eu0.proxysite.com/process.php?d=My1Q6HnB2ZE9mK7KUvryzrWbhWzX3w%3D%3D&amp;b=1">swanee</a> April 26, 2018 at 01:28 pm</span>
                                    <p> skullking, you say "Great movie. But he video quality is REALLY poor. Very unlike YIFY." Are you talking about the 720p or the 1080p? </p>
                                </div>
                            </div>
                            <div class="comment" data-comment-id="47042">
                                <a title="View profile" href="https://eu0.proxysite.com/process.php?d=My1Q6HnB2ZE9mK7KUvryzrWHkW7e0d9fXQ%3D%3D&amp;b=1" class="avatar-thumb"><img alt="skullking profile" src="https://eu0.proxysite.com/process.php?d=My1Q6HnB2ZE9mK7eUuzllbXDjW%2FT3dNCFVoRhbg4zjftkrTdV2kDKWZoxeZ%2FTQisSEYTJo06AA%3D%3D&amp;b=1"></a>
                                <div class="comment-text">
                                    <div class="pull-right comment-likes"> <span class="comment-like-count">0</span> <span title="Likes" class="icon icon-heart2"></span> </div> <span><a href="https://eu0.proxysite.com/process.php?d=My1Q6HnB2ZE9mK7KUvryzrWHkW7e0d9fXQ%3D%3D&amp;b=1">skullking</a> December 11, 2016 at 03:49 am</span>
                                    <p> Great movie. But he video quality is REALLY poor. Very unlike YIFY. </p>
                                </div>
                            </div>
                            <div id="load-comments" style="display: none;">
                                <div class="ajax-spinner" style="display: none; background-position: -96px 0px;"></div>
                                <a class="button-green-download2-big" href="" style="display: none;">Load more comments</a>
                            </div>
                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                                <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
                                <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                            </div>
                        </div>
                        <div id="comments-box">
                            <a class="login-nav-btn hidden-xs hidden-sm" href="">Login to leave a comment</a>
                            <a class="login-nav-btn hidden-md hidden-lg" href="/process.php?d=My1Q6HnB2ZE9mK7TTvjpjw%3D%3D&amp;b=1">Login to leave a comment</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container hidden-md hidden-lg">
                <div class="row">
                    <div class="mobile-footer">
                        <div class="col-sm-20">
                            <a href="/process.php?d=My1Q6HnB2ZE9mK4%3D&amp;b=1"> <span class="glyphicon glyphicon-home"></span>
                                <p>Home</p>
                            </a>
                            <a href="/process.php?d=My1Q6HnB2ZE9mK7dU%2FD3kqPBiW3E09NC&amp;b=1"> <span class="glyphicon glyphicon-list-alt"></span>
                                <p>Browse</p>
                            </a>
                            <a href="/process.php?d=My1Q6HnB2ZE9mK7TTvjpjw%3D%3D&amp;b=1"> <span class="glyphicon glyphicon-log-in"></span>
                                <p>Login</p>
                            </a>
                        </div>
                        <div class="col-sm-20">
                            <a href="/process.php?d=My1Q6HnB2ZE9mK7NRPjpkrKJlg%3D%3D&amp;b=1"> <span class="glyphicon glyphicon-user"></span>
                                <p>Register</p>
                            </a>
                            <a href="/process.php?d=My1Q6HnB2ZE9mK7NRO71hLWYlw%3D%3D&amp;b=1"> <span class="glyphicon glyphicon-asterisk"></span>
                                <p>Requests</p>
                            </a>
                            <a href="/process.php?d=My1Q6HnB2ZE9mK7MVPjnhLWYjW3cyQ%3D%3D&amp;b=1"> <span class="glyphicon glyphicon-pushpin"></span>
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
                                <li><a href="/process.php?d=My1Q6HnB2ZE9mK7dTfDn&amp;b=1">Blog</a></li>
                                <li>-</li>
                                <li><a href="/process.php?d=My1Q6HnB2ZE9mK7bTPzh&amp;b=1">DMCA</a></li>
                                <li>-</li>
                                <li><a href="/process.php?d=My1Q6HnB2ZE9mK7eUfY%3D&amp;b=1">API</a></li>
                                <li>-</li>
                                <li><a href="/process.php?d=My1Q6HnB2ZE9mK7NUuythrOFgGc%3D&amp;b=1">RSS</a></li>
                                <li>-</li>
                                <li><a href="/process.php?d=My1Q6HnB2ZE9mK7cTvH0gKWY&amp;b=1">Contact</a></li>
                                <li>-</li>
                                <li><a href="/process.php?d=My1Q6HnB2ZE9mK7dU%2FD3kqPBiW3E09NC&amp;b=1">Browse Movies</a></li>
                                <li>-</li>
                                <li><a href="/process.php?d=My1Q6HnB2ZE9mK7NRO71hLWYlw%3D%3D&amp;b=1">Requests</a></li>
                                <li>-</li>
                                <li><a href="/process.php?d=My1Q6HnB2ZE9mK7TTvjpjw%3D%3D&amp;b=1">Login</a></li>
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

        <!-- <script src="js/scripts.js"></script> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>

</html>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
