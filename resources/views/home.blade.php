@extends('layouts.app')

@section('additionalCSS')
    <style>
        .test .owl-pagination {
            position: absolute;
            left: 6px;
            bottom: 0;
            margin-bottom: -43px;
        }
        .test-grid2 img {
            margin: 5px 0;
            width: 360px;
        }

        .col-md-4.test-grid2.img-resize img {
            height: 250px;
            width: 100%;
            object-fit: cover;
        }

        .about-text {
            text-align: center;
            margin-top: 14px;
        }

        .about-text h4 {
            font-weight: bold;
            text-transform: capitalize;
        }

        .about-text h5 {
            text-transform: capitalize;
            padding: 3px 0;
        }
        .w3_agileits_about_grid_left span{
            margin-bottom: 0;
        }

        .about-more{
            margin-bottom: 8px;
            display: inline-block;
        }

        .choose_icon:hover {
            cursor: pointer;
        }
        .choose_icon:hover h3{
            color:#0dbd6d;
        }

        .choose_right a {
            color: #fff;
        }
        a.item img {
            width: 100%;
        }
        .w3_agileits_about_grid_left p {
            text-align: justify;
            color: #000;
        }

        .hovereffect.w3ls_banner_bottom_grid img {
            width: 100%;
            height: 250px;
        }
    </style>


@stop
@section('content')
    <!-- banner -->
    <div class="banner-silder">
        <div id="JiSlider" class="jislider">
            <ul>
                @foreach($sliders as $slider)
                <li>
                    <div class="w3layouts-banner-top" style="background-image:url('{{ asset('uploads/slider/'.$slider->image) }}');">

                        <div class="container">
                            <div class="agileits-banner-info">

                                <h3>{{ $slider->heading }} </h3>
                                <p>{{ $slider->subheading }}</p>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach


            </ul>
        </div>
    </div>

    <!-- //banner -->
    <!-- about -->
    <div class="inner_main_agile_section">
        <div class="container">
            <h3 class="w3l_header w3_agileits_header">About <span>Us</span></h3>
            <p class="sub_para_agile two">A team of professionals</p>

            <div class="agile_inner_grids">

                <div class="col-md-6 w3_agileits_about_grid_left">
                    <p>
                        Development Technical Consultants Pvt. Ltd. (DTCL) is an <strong>ISO 9001:2015</strong>  leading consulting firm of Bangladesh founded in 2001. Appropriate and adequate technical know-how is one of the pre-requisites for the development of the country. But its lack has greatly hampered the country’s development work - a common phenomenon observed in all developing countries.


                         Hence, the increase in technical capabilities, both qualitative and quantitative, of Bangladeshi professionals’ needs immediate attention, Economic development of the country is in fact directly proportional to its technical capabilities. DTCL is duly registered with ADB through CMS No. 012563 and the World Bank including other bilateral and multilateral donors and government agencies.

                    </p>

                        <a class="about-more" href="{{url('page/about-us')}}">Read more</a>

                </div>
                <div class="col-md-6 w3_agileits_about_grid_right">
                    <div class="about-carousel owl-carousel">
                        <a href="{{url('our-team')}}" class="item">
                            <img src="{{asset('fontend/images/about-slider/IMG_8824-300x200.jpg')}}" alt="">
                            <div class="about-text">
                                <h4>DR. M M AMIR HOSSAIN</h4>
                                <h5>MANAGING DIRECTOR, DTCL</h5>
                            </div>
                        </a>
                        <a href="{{url('our-team')}}" class="item">
                            <img src="{{asset('fontend/images/about-slider/IMG_8835.jpg')}}" alt="">
                            <div class="about-text">
                                <h4>DTCL Group</h4>

                            </div>
                        </a>



                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->

    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">

            <h2 class="w3l_header w3_agileits_header">Recent <span>Projects</span> </h2>

            @foreach($projects->chunk(3) as $chunk)
            <div class="agileits_banner_bottom_grids {{ $loop->first ? '' : 'two' }}">
                @foreach($chunk as $project)
                    <div class="col-md-4 agileits_banner_bottom_grid">
                        <div class="hovereffect w3ls_banner_bottom_grid">
                            <img src="{{asset('uploads/project/'.$project->image)}}" alt=" " class="img-responsive " />
                            <div class="overlay">
                                <h4>{{ $project->title }}</h4>
                                <p><a class="project-see" href="{{ route('project_details', ['id' => $project->id]) }}">More...</a></p>

                            </div>
                        </div>
                    </div>

                @endforeach
                <div class="clearfix"> </div>
            </div>
            @endforeach



        </div>
        <!-- /blog -->
        <div class="events">
            <div class="container">
                <h3 class="w3l_header w3_agileits_header">Recent <span>News</span></h3>

                <br>
                <ul id="flexiselDemo1">
                    @foreach($newses as $news)
                        <li>
                            <div class="w3layouts_event_grid">
                                <div class="w3_agile_event_grid1">
                                    <img src="{{asset('uploads/news/image/'.$news->image)}}" alt=" " class="img-responsive" />

                                    <div class="w3_agile_event_grid1_pos">
                                        <p>
                                            {{ date("d F Y", strtotime($news->uploaded_at)) }}

                                        </p>
                                    </div>

                                </div>
                                <div class="agileits_w3layouts_event_grid1">
{{--                                    <h5><a href="{{ route('news_details', ['id' => $news->id]) }}">{{ $news->title }}</a></h5>--}}
{{--                                    --}}
                                    <p>{!! Str::words($news->description, 15) !!}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>

        </div>
        <!-- //blog -->
    </div>
    <!-- //banner-bottom -->

    <!-- services -->
    <div class="services" id="services">
        <div class="container">
            <h3 class="w3l_header w3_agileits_header two">Our <span>SERVICES</span></h3>

            <div class="agile_inner_grids">
                <div class="row">
                    <div class="col-md-6 choose_icon">
                        <div class="choose_left">
                            <i class="fa fa-tree" aria-hidden="true"></i>
                        </div>
                        <div class="choose_right">
                            <h3>Agricultural, Fisheries & Livestock </h3>
                            <p>With significant experience spanning farm to market, including policy, value chain analysis, research and extension.</p>
                            <a href="{{url('page/agricultural-fisheries-livestock')}}">More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 choose_icon">
                        <div class="choose_left">
                            <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                        <div class="choose_right">
                            <h3>Education & Training </h3>
                            <p>Including pre-primary, primary, secondary and tertiary education as well as non-formal, technical and vocational education & training (TVET) policy.</p>
                            <a href="{{url('page/education-training')}}">More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-md-6 choose_icon">
                        <div class="choose_left">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </div>
                        <div class="choose_right">
                            <h3>Social Development</h3>
                            <p>Focusing on developing and strengthening the capacity of cooperatives, NGOs, associations and other organizations .</p>
                            <a href="{{url('page/social-development')}}">More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 choose_icon">
                        <div class="choose_left">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="choose_right">
                            <h3>Forest & Environment</h3>
                            <p>With significant experience in forest resource management, forest resource monitoring and assessment, management .</p>
                            <a href="{{url('page/forest-environment')}}">More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-md-6 choose_icon">
                        <div class="choose_left">
                            <i class="fa fa-bolt" aria-hidden="true"></i>
                        </div>
                        <div class="choose_right">
                            <h3>Power & Energy</h3>
                            <p>With significant experience in generation, transmission and distribution, planning and management, policy .</p>
                            <a href="{{url('page/power-energy')}}">More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 choose_icon">
                        <div class="choose_left">
                            <i class="fa fa-info" aria-hidden="true"></i>
                        </div>
                        <div class="choose_right">
                            <h3>Information & Communication Technology</h3>
                            <p>Spanning data collection using tab and mobile apps, information management system including design, development.</p>
                            <a href="{{url('page/information-communication-technology')}}">More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-md-6 choose_icon">
                        <div class="choose_left">
                            <i class="fa fa-taxi" aria-hidden="true"></i>
                        </div>
                        <div class="choose_right">
                            <h3>Infrastructure & Transport</h3>
                            <p>Covering all aspects of infrastructure development includes ‘Rural & Urban, Roads, Bridge, Culverts, Rail, Shipping .</p>
                            <a href="{{url('page/infrastructure-transport')}}">More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 choose_icon">
                        <div class="choose_left">
                            <i class="fa fa-building" aria-hidden="true"></i>
                        </div>
                        <div class="choose_right">
                            <h3>Infrastructure Development</h3>
                            <p>Infrastructure Development covering all aspects of infrastructure development includes Rural and Urban, Roads</p>
                            <a href="{{url('page/infrastructure-development')}}">More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-md-6 choose_icon">
                        <div class="choose_left">
                            <i class="fa fa-tint  " aria-hidden="true"></i>
                        </div>
                        <div class="choose_right">
                            <h3>Water Resource, Water Supply & Sanitation</h3>
                            <p>Including water resource management, water supply, sanitation, urban development engineering and infrastructure.</p>
                            <a href="{{url('page/water-resource-water-supply-sanitation')}}">More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 choose_icon">
                        <div class="choose_left">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </div>
                        <div class="choose_right">
                            <h3>Health and Population</h3>
                            <p>Covering health, family welfare and population sector. The service in the field includes general health, primary .</p>
                            <a href="{{url('page/health-and-population')}}">More</a>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-md-6 choose_icon">
                        <div class="choose_left">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        <div class="choose_right">
                            <h3>Economic & Financial Management         </h3>
                            <p>Public private partnership (PPP), macro/micro finance, SME, capital market development, fiscal management.</p>
                            <a href="{{url('page/economic-financial-management')}}">More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>
    <!-- //services -->
    <!-- stats -->
    <div class="stats" id="stats">
        <div class="container">
            <div class="inner_w3l_agile_grids">
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                    <p class="counter">{{$allproject}}</p>
                    <h3>All Project</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <p class="counter">{{$complete}}</p>
                    <h3>Complete Project</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
                    <i class="fa fa-spinner" aria-hidden="true"></i>
                    <p class="counter">{{$ongoing}}</p>
                    <h3>Ongoing Project</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <p class="counter">{{$shortlisted}}</p>
                    <h3>Shortlisted Project</h3>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //stats -->
    <!-- agile_testimonials -->
    <div class="test">
        <div class="container">
            <h3 class="w3l_header w3_agileits_header">Recent <span>Activities</span></h3>

            <div class="agile_inner_grids">
                <div class="test-gri1">
                    <div id="owl-demo2" class="owl-carousel">
                        @foreach($activities as $activity)
                        <div class="agile">
                            <div class="test-grid">
                                <div class="col-md-4 test-grid2 img-resize">
                                    <img src="{{asset('uploads/activity/'.$activity->image1)}}" alt="" class="img-r">
                                </div>
                                <div class="col-md-4 test-grid2 img-resize">
                                    <img src="{{asset('uploads/activity/'.$activity->image2)}}" alt="" class="img-r">
                                </div>
                                <div class="col-md-4 test-grid2 img-resize">
                                    <img src="{{asset('uploads/activity/'.$activity->image3)}}" alt="" class="img-r">
                                </div>

                                <div class="col-md-12 test-grid1">
                                    <h4><strong>{{$activity->title}}</strong> </h4>
                                    <date>{{date('m/d/Y', strtotime($activity->date))}}</date><br>
                                    {!! $activity->description !!}

                                </div>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //agile_testimonials -->
@stop
@section('additionalJS')
    <script src="{{asset('fontend/js/JiSlider.js')}}"></script>
    <script src="{{asset('fontend/js/owl.carousel.js')}}"></script>
    <script>
    $(document).ready(function(){

        $(window).load(function () {
            $('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
        })

        $(".about-carousel").owlCarousel({
            items : 1,
            lazyLoad : false,
            autoPlay : true,
            navigation : false,
            navigationText :  false,
            pagination : false,
            dots:false,

        });


        $("#owl-demo2").owlCarousel({
            items : 1,
            lazyLoad : false,
            autoPlay : true,
            navigation : false,
            navigationText :  false,
            pagination : true,
        });
    });
</script>
@stop
