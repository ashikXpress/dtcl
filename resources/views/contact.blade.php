@extends('layouts.app')

@section('additionalCSS')
    <style>
        #map {
            height: 400px;
        }
    </style>
@stop

@section('content')
    <!--/ banner -->
    <div class="banner1">

        <div class="w3_agileits_service_banner_info">
            <h2>Contact Us </h2>
        </div>
    </div>

    <!--/ banner -->
    <!-- /contact -->
    <div class="inner_main_agile_section">
        <div class="container">

            <h3 class="w3l_header w3_agileits_header"> Leave a <span>Message</span></h3>
            <p class="sub_para_agile">Ipsum dolor sit amet consectetur adipisicing elit</p>
            <div class="sub_para_agile two">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ Session::get('message') }}
                </div>
                @endif
            </div>
            <div class="contact-form agile_inner_grids">
                <form action="{{ route('contact_post') }}" method="post">
                    @csrf
                    <div class="fields-grid">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="full_name" value="{{old('full_name')}}">
                            <label>Full Name <span class="text text-danger">{{$errors->first('full_name')}}</span></label>
                            <span></span>

                        </div>
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="phone_number" value="{{old('phone_number')}}">
                            <label>Phone <span class="text text-danger">{{$errors->first('phone_number')}}</span></label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="email" name="email" value="{{old('email')}}">
                            <label>Email <span class="text text-danger">{{$errors->first('email')}}</span></label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" value="{{old('subject')}}" name="subject">
                            <label>Subject <span class="text text-danger">{{$errors->first('subject')}}</span></label>
                            <span></span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="styled-input textarea-grid">
                        <textarea name="message">{{old('message')}}</textarea>
                        <label>Message <span class="text text-danger">{{$errors->first('message')}}</span></label>
                        <span></span>
                    </div>
                    <input type="submit" value="SEND">
                </form>
            </div>
        </div>
    </div>


    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="px-0">
            <div id="map"></div>
        </div>
    </section>
@endsection

@section('additionalJS')
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
                document.getElementById('map'), {zoom: 19, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});

            var map = new google.maps.Map(
                document.getElementById('map_footer'), {zoom: 16, center: uluru});

            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
@endsection
