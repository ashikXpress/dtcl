@extends('layouts.app')

@section('additionalCSS')
    <style>
        #map {
            height: 400px;
        }

        section.liason-office {
            background: #ddd;
            padding: 45px 0;
        }

        .liason-office-text {
            padding: 10px 0;
        }

        .liason-office-text h2 {
            font-weight: bold;
            font-size: 21px;
            margin: 0 0 10px 0;
        }



        .liason-office-text p {
            font-size: 17px;
        }

        h1.liasont-header-text {
            font-weight: bold;
            font-size: 31px;
            margin-bottom: 10px;
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
    <section class="liason-office">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="liasont-header-text text-center">LIASON OFFICES</h1>
                </div>
                <div class="col-sm-4">
                    <div class="liason-office-text">
                        <h2>New Zealand</h2>
                        <p><strong>Addres:</strong> <span>17 Bruce Street, PO Box 21, Hunterville, New Zealand </span></p>
                        <p><strong>Phone:</strong> <span>+88029856438-9, +6463228773</span></p>
                        <p><strong>Fax:</strong> <span>+6463228743</span></p>
                        <p><strong>Email:</strong> <span>info@dtcltd.org, rdl@iconz.co.nz</span></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="liason-office-text">
                        <h2>South Africa</h2>
                        <p><strong>Addres:</strong> <span>Unit:31, Cambridge Office Park, Centurion</span></p>
                        <p><strong>Phone:</strong> <span>+88029856438-9, +27126651085</span></p>
                        <p><strong>Fax:</strong> <span>+27865662241</span></p>
                        <p><strong>Email:</strong> <span>info@dtcltd.org, bevd@epcmconsultants.co.za</span></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="liason-office-text">
                        <h2>Nepal</h2>
                        <p><strong>Addres:</strong> <span>87 Nachaghar Galli, Kantipath 3317 Kathmandu, Nepal</span></p>
                        <p><strong>Phone:</strong> <span>+88029856438-9, +977-4229186</span></p>
                        <p><strong>Fax:</strong> <span>977-1-422-9185</span></p>
                        <p><strong>Email:</strong> <span>info@dtcltd.org, info@devtec.com.np</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

            var foot = new google.maps.Map(
                document.getElementById('map_footer'), {zoom: 16, center: uluru}
                );


            var image = {
                url: "{{asset('fontend/images/299087-64.png')}}",
                size: new google.maps.Size(32, 38),
                scaledSize: new google.maps.Size(32, 38),
                labelOrigin: new google.maps.Point(48, 20)
            };

            var marker = new google.maps.Marker({
                position: uluru, map: map,
                icon:image,
                title:'DTCL',
                label: { color:'red', fontWeight: 'bold', fontSize: '14px', text: 'DTCL' },
            });
            var marker2 = new google.maps.Marker({
                position: uluru, map: foot,
                icon:image,
                title:'DTCL',
                label: { color:'red', fontWeight: 'bold', fontSize: '14px', text: 'DTCL' },
            });
        }
    </script>
@endsection
