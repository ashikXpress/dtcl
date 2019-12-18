<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('themes/front/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/front/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('themes/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/front/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('themes/front/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('themes/front/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('themes/front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/front/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/front/css/custom.css') }}">
    @yield('additionalCSS')
</head>
<body>
<div class="bg-top navbar-light">
    <div class="container">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
            <div class="col-md-4 d-flex align-items-center">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.jpg') }}" alt="{{ config('app.name') }}" height="60px">
                </a>
            </div>
            <div class="col-lg-8 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <div class="text">
                            <span>Email</span>
                            <span>info@dtcltd.org</span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <div class="text">
                            <span>Call</span>
                            <span>+880 2 9856438; 9856439</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>


        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                @foreach($layoutData['menus'] as $menu)
                    @if ($menu->subMenus->count())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('/') .'/'.  $menu->url }}" id="{{ $menu->id }}" role="button" aria-haspopup="true" aria-expanded="false">
                                {{ $menu->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="{{ $menu->id }}">
                                @foreach ($menu->subMenus as $subitem)
                                    <a class="dropdown-item" href="{{ url('/') .'/'.  $subitem->url }}">{{ $subitem->name }}</a>
                                @endforeach
                            </div>
                        </li>
                    @else
                        <li class="nav-item"><a href="{{ url('/') .'/'.  $menu->url }}" class="nav-link pl-0">{{ $menu->name }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

@yield('content')


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">JB House, Plot No. 62, Road No. 14/1, Block No. G, Niketan, Gulshan-1, Dhaka-1212, Bangladesh</span></li>
                            <li><a href="tel:+880 2 9856438"><span class="icon icon-phone"></span><span class="text">+880 2 9856438; 9856439</span></a></li>
                            <li><a href="mailto:info@dtcltd.org"><span class="icon icon-envelope"></span><span class="text">info@dtcltd.org</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Recent News</h2>

                    @foreach($layoutData['newses'] as $news)
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url('{{ asset('uploads/news/image/'.$news->image) }}');"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('news_details', ['id' => $news->id]) }}">{{ $news->title }}</a></h3>
                                <div class="meta">
                                    <div><span class="icon-calendar"></span> {{ date("F d, Y", strtotime($news->uploaded_at)) }}</div>
                                    <div><span class="icon-person"></span> {{ $news->author }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        @foreach($layoutData['menus'] as $menu)
                            <li><a href="{{ url('/') .'/'.  $menu->url }}"><span class="ion-ios-arrow-round-forward mr-2"></span>{{ $menu->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="https://twitter.com/dtcl_info" target="_blank"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/dtcl.tours" target="_blank"><span class="icon-facebook"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Design and Developed By <a href="http://2aitbd.com" target="_blank">2A IT</a></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<div class="fb-customerchat"
     page_id="313068775974658"
     minimized="true">
</div>


<script src="{{ asset('themes/front/js/jquery.min.js') }}"></script>
<script src="{{ asset('themes/front/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('themes/front/js/popper.min.js') }}"></script>
<script src="{{ asset('themes/front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('themes/front/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('themes/front/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('themes/front/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('themes/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('themes/front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('themes/front/js/aos.js') }}"></script>
<script src="{{ asset('themes/front/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('themes/front/js/scrollax.min.js') }}"></script>
<script src="{{ asset('themes/front/js/main.js') }}"></script>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '2139187569495735',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.11'
        });
    };
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
@yield('additionalJS')

</body>
</html>
