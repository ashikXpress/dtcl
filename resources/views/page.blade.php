@extends('layouts.app')

@section('content')
    <div class="banner1">

        <div class="w3_agileits_service_banner_info">
            <h2>{{$item->name}}</h2>
        </div>
    </div>

    <div class="services two">
        <div class="container">
            {!! $item->content !!}
        </div>
    </div>

@endsection
