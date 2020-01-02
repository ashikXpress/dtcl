@extends('layouts.app')

@section('additionalCSS')
    <style>
        .container {
            text-align: justify;
        }


        .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
            font-size: 16px;
            color: #000;
            border-top: none !important;
        }
        th {
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <div class="banner1">

        <div class="w3_agileits_service_banner_info">
            <h2>{{$item->name}}</h2>
        </div>
    </div>

    <div class="services two">
        <div class="container">
            {!! $item->content !!}<br>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Sector</th>
                    <th>Client</th>
                    <th>Period</th>
                </tr>
                <tr>
                    @foreach($projects as $project)

                    <td>{{$loop->iteration}}</td>
                     <td><a href="{{ route('project_details', ['id' => $project->id]) }}">{{$project->title}}</a></td>
                        <td>{{$project->type}}</td>
                        <td>{{$project->sector}}</td>
                    <td>{{$project->client}}</td>
                    <td>{{date('yy',strtotime($project->start_date)).'-'.date('yy',strtotime($project->end_date))}}</td>
                    @endforeach
                </tr>
                </thead>
            </table>
        </div>
    </div>

@endsection
