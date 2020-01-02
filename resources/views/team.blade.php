@extends('layouts.app')
@section('additionalCSS')


    <style>
        .team-body {

            margin-bottom: 15px;
            cursor: pointer;
            transition: all 500ms ease;
        }
        .team-body:hover{
            opacity: 0.7;
        }


        .team-title {
            padding: 25px 0;
            text-transform: capitalize;
            font-weight: 600;
        }
        .team-text h4{
            font-size: 19px;
            padding: 10px;
        }


        .team-body {
            width: 100%;
            min-height: 300px;
            position: relative;
            border: 1px solid #eee;
            padding: 7px 5px;
        }

        .team-img img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            z-index: -1;
        }

        .team-text {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            background: #00000085;
            height: 67px;
            text-align: center;
            color: #fff;
            padding: 7px 4px;
            z-index: 99;
        }
    </style>
@endsection

@section('content')
    <div class="banner1">
        <div class="w3_agileits_service_banner_info">
            <h2>Team</h2>
        </div>
    </div>

    <section class="ftco-section inner_main_agile_section">
        <div class="container">
            <h3 class="w3l_header w3_agileits_header">Team <span>Members</span></h3>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="team-title">Board of Directors</h2>

                </div>
                @foreach($bordMember as $team)
                    <div class="col-md-3">
                        <div class="team-body">
                            <div class="team-img">
                                <img src="{{ asset('uploads/team/'.$team->image) }}" alt="{{$team->name}}">

                            </div>
                            <div class="team-text">
                                <h4>{{$team->name}}</h4>
                                <h5>{{$team->designation}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="team-title">Chief Official Team</h2>

                </div>
                @foreach($cheifMember as $team)
                    <div class="col-md-3">
                        <div class="team-body">
                            <div class="team-img">
                                <img src="{{ asset('uploads/team/'.$team->image) }}" alt="{{$team->name}}">

                            </div>
                            <div class="team-text">
                                <h4>{{$team->name}}</h4>
                                <h5>{{$team->designation}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="team-title">Executive Team</h2>

                </div>
                @foreach($executiveMember as $team)
                    <div class="col-md-3">
                        <div class="team-body">
                            <div class="team-img">
                                <img src="{{ asset('uploads/team/'.$team->image) }}" alt="{{$team->name}}">

                            </div>
                            <div class="team-text">
                                <h4>{{$team->name}}</h4>
                                <h5>{{$team->designation}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="team-title">Office Staff</h2>

                </div>
                @foreach($staffMember as $team)
                    <div class="col-md-3">
                        <div class="team-body">
                            <div class="team-img">
                                <img src="{{ asset('uploads/team/'.$team->image) }}" alt="{{$team->name}}">

                            </div>
                            <div class="team-text">
                                <h4>{{$team->name}}</h4>
                                <h5>{{$team->designation}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection

@section('additionalJS')

@endsection


