@extends('layouts.app')

@section('content')
    <div class="banner1">

        <div class="w3_agileits_service_banner_info">
            <h2>News</h2>
        </div>
    </div>
    <!-- /blog -->
    <div class="events">
        <div class="container">
            <h3 class="w3l_header w3_agileits_header">Our <span>News</span></h3>
            <p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p><br>
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
@endsection
