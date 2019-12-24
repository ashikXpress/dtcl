@extends('layouts.app')
@section('additionalCSS')


    <style>
        .client {
            text-align: center;
            transition: all 500ms ease;
            margin: 15px 0;
            min-height: 270px;
        }

        .card-title{
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        .client:hover{
            box-shadow: 0 0 5px 0 #e6e6e6;
            cursor: pointer;
        }

        .client img {
            max-width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
    <div class="banner1">
        <div class="w3_agileits_service_banner_info">
            <h2>Clients</h2>
        </div>
    </div>

    <section class="ftco-section inner_main_agile_section">
        <div class="container">
            <h3 class="w3l_header w3_agileits_header">Our <span>Clients</span></h3>
            <p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p><br>

          <div class="row">
              <h2 class="text-center" style="margin-bottom: 15px;">National</h2>
              @foreach($nationals as $client)
                    <div class="col-md-3">
                        <div  class="client">
                            <img src="{{ asset('uploads/client/'.$client->image) }}"  alt="{{$client->name}}">
                            <div class="client-text">
                                <h5 class="card-title">{{$client->name}}</h5>
                            </div>
                        </div>
                    </div>
              @endforeach
          </div>
          <div class="row">
              <h2 class="text-center" style="margin-bottom: 15px;">International</h2>
              @foreach($internationals as $client)
                    <div class="col-md-3">
                        <div  class="client">
                            <img src="{{ asset('uploads/client/'.$client->image) }}"  alt="{{$client->name}}">
                            <div class="client-text">
                                <h5 class="card-title">{{$client->name}}</h5>
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

