<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="{{asset('fontend/images/favicon.ico')}}" type="image/x-icon">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <link href="{{asset('fontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('fontend/css/JiSlider.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fontend/css/flexslider.css')}}" type="text/css" media="screen" property="" />
    <!-- Owl-carousel-CSS -->
    <link href="{{asset('fontend/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome-icons -->
    <link href="{{asset('fontend/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/index.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('fontend/lightbox2/css/lightbox.min.css') }}" rel="stylesheet" />
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        .navbar-default .navbar-nav > li > a, .dropdown-menu > li > a {
            font-family: 'Roboto', sans-serif;
            padding-right: 4px;
            font-size: 14px;
        }

        .main_section_agile {
            position: fixed;
            z-index: 99;
            background: #fff;
            width: 100%;
            box-shadow: 0px 1px 12px #ddd;
        }

        .sister-item i {
            color: #e1a312;
            margin-right: 6px;
        }

        .sister-item {
            margin: 0 0 13px 0;
        }

        .sister-item a {
            color: #fff;
        }
    </style>
    @yield('additionalCSS')



</head>

<body>
<!-- banner -->
<div class="main_section_agile">
    <div class="agileits_w3layouts_banner_nav">

        <nav class="navbar navbar-default">
            <div class="col-md-2 text-center logo-center">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('fontend/images/logo.jpg')}}" alt=""></a>
                    </div>

                </div>
            </div>
            <div class="col-md-10"> <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">

                            @foreach($layoutData['menus'] as $menu)
                                @if ($menu->subMenus->count())
                                    <li class="dropdown">
                                        <a href="{{ url('/') .'/'.  $menu->url }}" id="{{ $menu->id }}" class="dropdown-toggle effect-3">{{ $menu->name }} <b class="caret"></b></a>
                                        <ul class="dropdown-menu agile_short_dropdown" aria-labelledby="{{ $menu->id }}">
                                            @foreach ($menu->subMenus as $subitem)
                                                <li><a href="{{ url('/') .'/'.  $subitem->url }}">{{ $subitem->name }}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                @else
                                    <li><a href="{{ url('/') .'/'.  $menu->url }}" class="effect-3">{{ $menu->name }}</a></li>

                                @endif
                            @endforeach
                        </ul>
                    </nav>

                </div>
            </div>



        </nav>
        <div class="clearfix"> </div>
    </div>
</div>


@yield('content')
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3_agile_footer_grids">
            <div class="col-md-4 w3_agile_footer_grid">
                <h3>Location</h3>
                <div id="map_footer" style="height: 342px"></div>
            </div>
            <div class="col-md-4 w3_agile_footer_grid">
                <h3>Navigation</h3>
                <ul class="agileits_w3layouts_footer_grid_list">
                @foreach($layoutData['menus'] as $menu)
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="{{ url('/') .'/'.  $menu->url }}">{{ $menu->name }}</a></li>
                @endforeach
                </ul>
            </div>
            <div class="col-md-4 w3_agile_footer_grid">
                <h3>Gallery</h3>
                @foreach($layoutData['footerGallery'] as $gallery)
                <div class="w3_agileits_footer_grid_left">
                    <a href="{{ asset('uploads/gallery/'.$gallery->image) }}" data-lightbox="album" data-title="{{ $gallery->title }}" data-alt="{{ $gallery->title }}">
                        <img src="{{ asset('uploads/gallery/thumbs/'.$gallery->image) }}" class="img-thumbnail">
                    </a>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="w3ls_address_mail_footer_grids">
            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <p><span>JB House, Plot No. 62, Road No. 14/1, Block No. G, Niketan, Gulshan-1, Dhaka-1212, Bangladesh</span></p>
            </div>
            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <p><a href="tel:+880 2 9856438">+880 2 9856438</a></p>
            </div>
            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                <p>
                    <a href="mailto:info@dtcltd.org">info@dtcltd.org</a><br>
                    <a href="mailto:info@dtcltd.org">info.dtclgroup@gmail.com</a>

            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="sister-concern">

            <ul class="row">
                <li class="col-md-2">SISTER CONCERN: </li>
                <span class="col-md-3">
                   <li class="col-md-12  sister-item"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="#">DTCL Consulting Firm</a></li>
                    <li class="col-md-12  sister-item"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="#">DTCL-Future Tech</a></li>

                </span>
                <span class="col-md-4">
                     <li class="col-md-12  sister-item"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="#">Development Engineering Pvt. Ltd.</a></li>
                    <li class="col-md-12  sister-item"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="#">DTCL-e-Commerce</a></li>

                </span>
                <span class="col-md-3">
                    <li class="col-md-12  sister-item"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="#">DTCL-Agro Industries</a></li>

                </span>


            </ul>
        </div>
        <div class="agileinfo_copyright">
            <p>Design & Developed by  <a target="_blank" href="http://2aitbd.com/">2A IT</a></p>
        </div>
    </div>
</div>
<!-- //footer -->

<!-- start-smoth-scrolling -->
<!-- js -->
<script type="text/javascript" src="{{asset('fontend/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
<!-- stats -->
<script src="{{asset('fontend/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('fontend/js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->

<!-- flexisel -->
<script type="text/javascript" src="{{asset('fontend/js/jquery.flexisel.js')}}"></script>
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 4,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:667,
                    visibleItems:2
                },
                tablet: {
                    changePoint:800,
                    visibleItems: 3
                }
            }
        });

    });
</script>
<!-- //flexisel -->
<!-- requried-jsfiles-for owl -->
<script type="text/javascript" src="{{asset('fontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('fontend/js/easing.js')}}"></script>
<script src="{{ asset('fontend/lightbox2/js/lightbox.min.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
<script src="{{asset('fontend/js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->


<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnKKbnZogxI9jte1w5VhVfg0CyyZyJTzw&callback=initMap">
</script>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = {lat: 23.772520, lng: 90.4056818};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map_footer'), {zoom: 16, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>

@yield('additionalJS')
</body>
</html>
