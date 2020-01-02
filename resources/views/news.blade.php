@extends('layouts.app')

@section('additionalCSS')
    <style>
        .agileits_w3layouts_event_grid1 {
            margin-bottom: 15px;
        }
    </style>
    @endsection

@section('content')
    <div class="banner1">

        <div class="w3_agileits_service_banner_info">
            <h2>News</h2>
        </div>
    </div>
    <!-- /blog -->
    <div class="events">
        <div class="container">
            <h3 class="w3l_header w3_agileits_header">Recent <span>News</span></h3><br>

            <ul class="row">
                @foreach($newses->chunk(3) as $row)
                    <div class="row">
                @foreach($row as $news)
                    <li class="col-md-4">
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
                                <h5><a href="{{ route('news_details', ['id' => $news->id]) }}">{{ $news->title }}</a></h5>
                                <p>{!! Str::words($news->description, 15) !!}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
                    </div>
                    @endforeach

            </ul>
            {{$newses->links()}}

        </div>

    </div>
    <!-- //blog -->
@endsection
