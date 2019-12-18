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
            height: 300px;
            width: 100%;
            object-fit: contain;
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
            <p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p>

            <div class="agile_inner_grids">

                <div class="col-md-6 w3_agileits_about_grid_left">
                    <p>Duis turpis arcu, dictum eu tincidunt id, congue vel urna. Quisque posuere,
                        ipsum eu faucibus cursus, ex tortor elementum leo, eget varius lorem quam a nisl.
                        Mauris ut enim sed tortor auctor luctus at vitae est.<span>Duis dignissim auctor rhoncus.
                        Curabitur diam lorem, ultricies eu pellentesque sed, elementum sodales urna.
                        Pellentesque molestie maximus nisl at ultrices.</span> </p>
                    <ul>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Marketing</li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Professional approach</li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Production</li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Effective Solutions</li>
                    </ul>
                </div>
                <div class="col-md-6 w3_agileits_about_grid_right">
                    <div class="about-carousel owl-carousel">
                        <div class="item"><img src="{{asset('fontend/images/1.jpg')}}" alt=""></div>
                        <div class="item"><img src="{{asset('fontend/images/2.jpg')}}" alt=""></div>
                        <div class="item"><img src="{{asset('fontend/images/3.jpg')}}" alt=""></div>
                        <div class="item"><img src="{{asset('fontend/images/4.jpg')}}" alt=""></div>
                        <div class="item"><img src="{{asset('fontend/images/5.jpg')}}" alt=""></div>
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

            <h2 class="w3l_header w3_agileits_header">We Carefully handle all <span>Projects</span> </h2>
            <p class="sub_para_agile">Ipsum dolor sit amet consectetur adipisicing elit</p>
            @foreach($projects->chunk(4) as $chunk)
            <div class="agileits_banner_bottom_grids {{ $loop->first ? '' : 'two' }}">
                @foreach($chunk as $project)
                    <div class="col-md-3 agileits_banner_bottom_grid">
                        <div class="hovereffect w3ls_banner_bottom_grid">
                            <img src="{{asset('uploads/project/'.$project->image)}}" alt=" " class="img-responsive" />
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
                <p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p>

                <br>
                <ul id="flexiselDemo1">
                    @foreach($newses as $news)
                        <li>
                            <div class="w3layouts_event_grid">
                                <div class="w3_agile_event_grid1">
                                    <img src="{{asset('fontend/images/1.jpg')}}" alt=" " class="img-responsive" />
                                    <div class="w3_agile_event_grid1_pos">
                                        <p>
                                            {{ date("d F Y", strtotime($news->uploaded_at)) }}

                                        </p>
                                    </div>

                                </div>
                                <div class="agileits_w3layouts_event_grid1">
                                    <h5><a href="{{ route('news_details', ['id' => $news->id]) }}">{{ $news->title }}</a></h5>
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
            <p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p>

            <div class="agile_inner_grids">
                <div class="row">
                    <div class="col-md-6 choose_icon">
                        <div class="choose_left">
                            <i class="fa fa-tree" aria-hidden="true"></i>
                        </div>
                        <div class="choose_right">
                            <h3>Agricultural, Fisheries & Livestock </h3>
                            <p>With significant experience spanning farm to market, including policy, value chain analysis, research and extension.</p>
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
                            <h3>Infrastructure & Transport       </h3>
                            <p>Covering all aspects of infrastructure development includes ‘Rural & Urban, Roads, Bridge, Culverts, Rail, Shipping .</p>
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
            <h3 class="w3l_header w3_agileits_header">Our Recent <span>Activity</span></h3>
            <p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p>

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
                                    <h4>{{$activity->title}} </h4>
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
