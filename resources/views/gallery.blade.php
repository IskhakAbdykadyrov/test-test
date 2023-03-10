@extends('layout.nav')

@section('content')
    <body class="gallery-page">
    <div class="wrap-body">
        <!--////////////////////////////////////Container-->
        <section id="container">
            <div class="wrap-container">
                <!-----------------Content-Box-------------------->
                <div id="main-content" class="zerogrid">
                    <div class="wrap-content">
                        <div class="row">
                            @foreach($states as $state)
                            <div class="col-1-3">
                                <div class="wrap-col">
                                    <article>
                                        <div class="post-thumbnail-wrap">
                                            <a href="single.html" class="portfolio-box">
                                                <img src="{{$state->image}}" alt="">
                                            </a>
                                        </div>
                                        <div class="entry-header ">
                                            <h3 class="entry-title">{{$state->name}}</h3>
                                            <div class="text-sm text-gray-500">{{$state->description}}</div>
                                            <div class="l-tags"><a href="#">Design</a> / <a href="#">Illustrations</a></div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--////////////////////////////////////Footer-->
        <footer>
            <div class="zerogrid wrap-footer">
                <div class="row">
                    <div class="col-1-4 col-footer-1">
                        <div class="wrap-col">
                            <h3 class="widget-title">About Us</h3>
                            <p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
                        </div>
                    </div>
                    <div class="col-1-4 col-footer-2">
                        <div class="wrap-col">
                            <h3 class="widget-title">Recent Post</h3>
                            <ul>
                                <li><a href="#">MOST VISITED COUNTRIES</a></li>
                                <li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
                                <li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
                                <li><a href="#">STARTUP COMPANY???S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-1-4 col-footer-3">
                        <div class="wrap-col">
                            <h3 class="widget-title">Tag Cloud</h3>
                            <a href="#">animals</a>
                            <a href="#">cooking</a>
                            <a href="#">countries</a>
                            <a href="#">city</a>
                            <a href="#">children</a>
                            <a href="#">home</a>
                            <a href="#">likes</a>
                            <a href="#">photo</a>
                            <a href="#">link</a>
                            <a href="#">law</a>
                            <a href="#">shopping</a>
                            <a href="#">skate</a>
                            <a href="#">scholl</a>
                            <a href="#">video</a>
                            <a href="#">travel</a>
                            <a href="#">images</a>
                            <a href="#">love</a>
                            <a href="#">lists</a>
                            <a href="#">makeup</a>
                            <a href="#">media</a>
                            <a href="#">password</a>
                            <a href="#">pagination</a>
                            <a href="#">wildlife</a>
                        </div>
                    </div>
                    <div class="col-1-4 col-footer-4">
                        <div class="wrap-col">
                            <h3 class="widget-title">Gallery</h3>
                            <div class="row">
                                <div class="col-1-3">
                                    <div class="wrap-col">
                                        <a href="#"><img src="images/11.jpg"></a>
                                        <a href="#"><img src="images/1.jpg"></a>
                                        <a href="#"><img src="images/13.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-1-3">
                                    <div class="wrap-col">
                                        <a href="#"><img src="images/10.jpg"></a>
                                        <a href="#"><img src="images/9.jpg"></a>
                                        <a href="#"><img src="images/4.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-1-3">
                                    <div class="wrap-col">
                                        <a href="#"><img src="images/2.jpg"></a>
                                        <a href="#"><img src="images/6.jpg"></a>
                                        <a href="#"><img src="images/5.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zerogrid bottom-footer">
                <div class="row">
                    <div class="bottom-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-vimeo"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="copyright">
                    Copyright @ - Designed by <a href="https://www.zerotheme.com" title="free website templates">ZEROTHEME</a>
                </div>
            </div>
        </footer>
    </div>
    </body>
@endsection
