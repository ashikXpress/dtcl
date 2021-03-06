@extends('layouts.app')
@section('additionalCSS')
    <style>

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
            <h2>Recent Activities</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped project-table">
                    <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($activites as $activity)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td><a  href="{{ route('activity.details', ['id' => $activity->id]) }}">{{ $activity->title }}</a></td>
                            <th scope="row">{{date('d F Y', strtotime($activity->date))}}</th>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                {{$activites->links()}}
            </div>
        </div>
    </div>

@endsection
