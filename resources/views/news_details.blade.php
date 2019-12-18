@extends('layouts.app')

@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0"></script>

    <div class="banner1">
        <div class="w3_agileits_service_banner_info">
            <h2>News</h2>
        </div>
    </div>


    <div class="services two">
        <div class="container">
            <div class="agile_inner_grids">
                <div class="col-md-12">
                    <h3>{{ $news->title }}</h3>
                    <p>{{ $news->author }} - {{ date("F d, Y", strtotime($news->uploaded_at)) }}</p>
                    <br>
                    <img src="{{ asset('uploads/news/image/'.$news->image) }}" alt="not found" style="width: 100%;height: 350px;object-fit: contain">
                    <br><br>
                    {!! $news->description !!}

                    <div class="fb-comments" data-href="{{ url()->current() }}" data-numposts="10"></div>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection
