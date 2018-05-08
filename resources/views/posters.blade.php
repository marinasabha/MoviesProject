@extends('master')
@section('title', ' - '. $order[0]->TITLE )

@section('content')
    <div class="row">
      <div class="col-md-3">
        @if($order[0]->IMAGEPATH == "")
          {{ $src = "/storage/posters/marina.jpg" }}
        @else
          {{ $src = "/storage/posters/" . $order[0]->IMAGEPATH }}
        @endif

<div class="container" id="movie-content" itemscope="" itemtype="/Movie">
    <div class="row">
        <div id="mobile-movie-info" class="visible-xs col-xs-20">
            <h1 itemprop="name">{{ $order[0]->TITLE }}</h1>
            <h2>{{ $order[0]->YEAR }}</h2>
            <h2>{{ $order[0]->GENERS }}</h2>
        </div>
        {{ $order[0]->IMDB_LINK }}
        <div id="movie-poster" class="col-xs-10 col-sm-6 col-lg-5">
            <img class="img-responsive" itemprop="image" src="{{$src}}" alt="The Posthuman Project (2014) download">
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
                        <a data-torrent-id="14255" href="/process.php?d=My1Q6HnB2ZE9mK7STunphOmBhWXc38ILBVcW3b85j3nnk7DXQjVWe0Ys6qcRFE38eRdVPd54IrR9vKf%2B3EZll4fvxw%2BdCXqpbu4bKOnhe40FdFmvwlQPJP6Tf4h8igvywGBlMvRwe3OUp%2BSwqD8PR7Lm%2FORsqraGWIUeNuYv5y%2FppOAGxEY0KgNqnJBWm82hHKA95Ajf74de1L1qrRx5gnCvBJucbRyvscWn5coh9l%2B5cptD9Yes%2BrqOoL4I71pYkP%2Fk1bx%2BgakX286Oa4%2Fb1xtV3J3%2BLARaPBw4gGtUQv71OJ2EK9NAtkmGTfkCXa4ad%2Bdd1UNGKSL9P6aOcK9YdE15LUuHNHdAPqlmVveo4mhbAz3QzIEijzbTJ%2BDAmQBvj7tzwPN9ugY79kXn9b8OtbBHDIVr%2BuDWAJqmc6GDS4xDFj8ZUVHh4ZzCHzSHnwRQaTCUBFvM%2BGtgcbe9WEyvNX2EqGK6i6tdFndSx6pvrOjXf7SFCz5hLyDs5qy4yR6swKdaGwEOORsp47KhcVBOtCS%2FJselr9rURsZdxZMtmgHfrw%3D%3D&amp;b=1" class="magnet-download download-torrent magnet" title="Download The Posthuman Project 720p Magnet" rel="nofollow"><span>Magnet</span></a>
                    </div>
                    <div class="modal-torrent">
                        <div class="modal-quality" id="modal-quality-1080p"><span>1080p</span></div>
                        <p>File size</p>
                        <p class="quality-size">1.51 GB</p>
                        <a download="" class="download-torrent button-green-download2-big" href="/process.php?d=My1Q6HnB2ZE9mK7LTu3yhKiYy2bdzdhdVU4Gz%2F8J2XPE1uyPTDhXeEIt7aUTaE6PeRFSSaF4IsQGvaL83kcV5vWcsgo%3D&amp;b=1" rel="nofollow" title="Download The Posthuman Project 1080p Torrent"><span class="icon-in"></span>Download</a>
                        <a data-torrent-id="14256" href="/process.php?d=My1Q6HnB2ZE9mK7STunphOmBhWXc38ILBVcW3b85j3nnk7DXQjgkdzdcmKcQGEv8C2JRTNB5I7EHvdD920Vjl%2FacxnudfQjcGetqIOrhe40FdFmvwlQPJP6Tf4h8igvywGBlMvRwe3OUp%2BSwqD8PR7Lm%2FORsrLSOGNAOR4kh91jyqed7q0BWOnIIzpYZ09y1SbZPgB%2BrjJAq9bZptgdkgmekHpzBMxv9p7fQ6sUu6kjNVZRD9J2397zN8rhHp0tMxemWsasK4r5j6cidaYfVwEcUw4j1IA9HPAclgHxfWKS4NJ%2FMPaE5vl%2FUS7ZKTLpPYZU5wjclPlbPObWMeKFPKAB1MkuSI3ZGOb1lQavy%2FSZNcUrfw4493TCcb%2FHUzBYd66wHo%2BQJiAAo9E3p4uNMvLBBB4h8%2B76LEYm1dqyZXccCCypbRyOW7pPNAGaB0ExBfWWCdj%2FbjAh3BYH5HBLgJmqPp2G%2FwuZWW2Egt6hvqPmFefvNGio0OVKI8djb3mqexrRYEw8ZZVwu%2BaO2bVtftzKsJtyjstuJBs1MlIVf6gPfq30%3D&amp;b=1" class="magnet-download download-torrent magnet" title="Download The Posthuman Project 1080p Magnet" rel="nofollow"><span>Magnet</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="movie-info" class="col-xs-10 col-sm-14 col-md-7 col-lg-8 col-lg-offset-1" data-movie-id="7670">
            <div class="hidden-xs">
                <h1>{{ $order[0]->TITLE }}</h1>
                <h2>{{ $order[0]->YEAR }}</h2>
                <h2>{{ $order[0]->GENERS }}</h2>
                <strong>IMDB_LINK :</strong> <a href= "{{ $order[0]->IMDB_LINK }}">   <img src="/storage/posters/imdb.jpg" style="width:20px;height:20px" alt="imdb image" /> </a>                
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
                    @guest
                    @else
                        <div class="leave-rating margin-bottom-30"style="height:50px">
                          <input type="radio" name="rating" class="rate" id="rating-1" value="5"/>
                          <label for="rating-1" class="fa fa-star"></label>
                          <input type="radio" name="rating" class="rate" id="rating-2" value="4"/>
                          <label for="rating-2" class="fa fa-star "></label>
                          <input type="radio" name="rating" class="rate" id="rating-3" value="3"/>
                          <label for="rating-3" class="fa fa-star"></label>
                          <input type="radio" name="rating" class="rate" id="rating-4" value="2"/>
                          <label for="rating-4" class="fa fa-star"></label>
                          <input type="radio" name="rating" class="rate" id="rating-5" value="1"/>
                          <label for="rating-5" class="fa fa-star"></label>
                        </div>
                      

                    @endguest   
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
                        <p>{{ $order[0]->DESCRIBTION }}</p>
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
                            <h3>Cast</h3> <!-- NOTICE: FOREACH LOOP WITH ACTORS FOR THIS MOVIE -->
                            <div class="list-cast">
                                <div class="tableCell">
                                    <a class="avatar-thumb" href="/actor/{{ $order[0]->ACTOR_1 }}" target="_blank" title="IMDb Profile"> 
                                      <img src="img/actor-2.jpg" alt="Rett Terrell Picture"> </a>
                                </div>
                                <div class="list-cast-info tableCell">
                                    <a class="name-cast" href="/actor/{{ $order[0]->ACTOR_2 }}"><span itemprop="actor" itemscope="" itemtype="/Person"><span itemprop="name">/actor/{{ $order[0]->ACTOR_1 }}</span></span></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="movie-tech-specs" class="row">
                <!-- NOTICE: DISPLAY SPECIFICATIONS FOR THIS MOVIE, IF EXISTS -->
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
                    <!-- NOTICE: FOREACH LOOP WITH COMMENTS FOR THIS , IF EXISTS -->
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
                            </p></article><a href="#" class="readmore-js-toggle">Read More</a>
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
                        <a class="more-reviews" href="" target="_blank">Read more IMDb reviews</a>
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
@endsection
