@extends('layouts.app')

@section('content')
    <div class="banner1">

        <div class="w3_agileits_service_banner_info">
            <h2>{{ $project->title }}</h2>
        </div>
    </div>



    <div class="services two">
        <div class="container">
            <div class="agile_inner_grids">
                <div class="col-md-12">
                    <img src="{{ asset('uploads/project/'.$project->image) }}" alt="not found" style="width: 100%;height: 350px;object-fit: contain">
                    <br><br>
                    {!! $project->description !!}

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
