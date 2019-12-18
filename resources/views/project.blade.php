@extends('layouts.app')

@section('content')
    <div class="banner1">

        <div class="w3_agileits_service_banner_info">
            <h2>Project - {{ $type }}</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped project-table">
                    <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Project Title</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td><a  href="{{ route('project_details', ['id' => $project->id]) }}">{{ $project->title }}</a></td>

                    </tr>
                @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                {{$projects->links()}}
            </div>
        </div>
    </div>

@endsection
