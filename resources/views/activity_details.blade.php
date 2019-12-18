@extends('layouts.app')
@section('additionalCSS')
    <style>
        img.img-r {
            max-width: 100%;
        }
        .agile_inner_grids {
            margin-top: 0;
        }
        img.img-r {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
    </style>
@endsection
@section('content')
    <div class="banner1">

        <div class="w3_agileits_service_banner_info">
            <h2>Activity Details</h2>
        </div>
    </div>

    <div class="test">
        <div class="container">
            <div class="agile_inner_grids">
                <div class="test-gri1">
                    <div class="col-md-12">

                        <div class="agile">
                                <div class="test-grid">
                                    <div class="col-sm-4 col-xs-12 test-grid2">
                                        <img src="{{asset('uploads/activity/'.$activity->image1)}}" alt="" class="img-r">
                                    </div>
                                    <div class="col-sm-4 col-xs-12 test-grid2">
                                        <img src="{{asset('uploads/activity/'.$activity->image2)}}" alt="" class="img-r">
                                    </div>
                                    <div class="col-sm-4 col-xs-12 test-grid2">
                                        <img src="{{asset('uploads/activity/'.$activity->image3)}}" alt="" class="img-r">
                                    </div>

                                    <div class="col-md-12 test-grid1">
                                        <h4>{{$activity->title}} </h4>
                                        <h5><strong>{{date('d F Y h:i A', strtotime($activity->date))}}</strong></h5>
                                        {!! $activity->description !!}

                                    </div>

                                </div>
                                <div class="clearfix"></div>
                            </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

