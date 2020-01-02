@extends('layouts.app')
@section('additionalCSS')


    <style>
        .row.mb-3 {
            margin-bottom: 15px;
            margin-top: 15px;
        }


    </style>
@endsection

@section('content')
    <div class="banner1">
        <div class="w3_agileits_service_banner_info">
            <h2>Gallery</h2>
        </div>
    </div>

    <section class="ftco-section inner_main_agile_section">
        <div class="container">
            <h3 class="w3l_header w3_agileits_header">Our <span>Gallery</span></h3>

        @foreach($items->chunk(3) as $row)
                <div class="row mb-3">
                    @foreach($row as $item)
                        <div class="col-md-4">
                            <a href="{{ asset('uploads/gallery/'.$item->image) }}" data-lightbox="album" data-title="{{ $item->title }}" data-alt="{{ $item->title }}">
                                <img src="{{ asset('uploads/gallery/thumbs/'.$item->image) }}" class="img-thumbnail">
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach

            {{ $items->links() }}
        </div>
    </section>
@endsection

@section('additionalJS')

@endsection
