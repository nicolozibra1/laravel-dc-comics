@extends('layouts.app')

@section('content')
<div class="divisor">
    <div class="box-image">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
</div>
<div class="container details py-5">
    <div class="row d-flex" id="details">
        <div class="col-8 pe-5">
            <h1 class="mb-3 fw-semibold">{{ $comic['title'] }}</h1>
            <div class="box-c2a mb-3 d-flex">
                <div class="price w-75 d-flex justify-content-between">
                    <span class="py-2">U.S. Price: <span class="fw-semibold">{{$comic['price']}}</span></span>
                    <span class="text-uppercase px-3 py-2">available</span>
                </div>
                <div class="check-available w-25 d-flex justify-content-center">
                    <span class="py-2 fw-semibold">Check Availability</span>
                </div>
            </div>
            <p class="fw-semibold">{{$comic['description']}}</p>
        </div>
        <div class="col-4">
            <div class="box-adv">
                <h6 class="text-uppercase fw-semibold text-center">advertisement</h6>
                <img src="/img/adv.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<section class="more-details">
    <div class="container">
        <div class="row d-flex">
            <div class="col-6">
                <h2 class="fw-semibold">Talent</h2>
                <hr>
                <div class="box-details d-flex">
                    <div class="sub-details w-25">
                        <h5 class="fw-semibold">Art by:</h5>
                    </div>
                    <div class="content w-75">
                        @foreach ($comic['artists'] as $artist )
                            <a href="#"><span>{{$artist}},</span></a>
                        @endforeach

                    </div>
                </div>
                <hr>
                <div class="box-details d-flex">
                    <div class="sub-details w-25">
                        <h5 class="fw-semibold">Written by:</h5>
                    </div>
                    <div class="content w-75">
                        @foreach ($comic['writers'] as $writer )
                            <a href="#"><span>{{$writer}},</span></a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h2 class="fw-semibold">Specs</h2>
                <hr>
                <div class="box-details d-flex">
                    <div class="sub-details w-25">
                        <h5 class="fw-semibold">Series:</h5>
                    </div>
                    <div class="content w-75">
                        <a href="#"><span>{{$comic['series']}}</span></a>
                    </div>
                </div>
                <hr>
                <div class="box-details d-flex">
                    <div class="sub-details w-25">
                        <h5 class="fw-semibold">U.S. Price:</h5>
                    </div>
                    <div class="content w-75">
                        <span class="fw-semibold">{{$comic['price']}}</span>
                    </div>
                </div>
                <hr>
                <div class="box-details d-flex">
                    <div class="sub-details w-25">
                        <h5 class="fw-semibold">On Sale Date:</h5>
                    </div>
                    <div class="content w-75">
                        <span class="fw-semibold">{{$comic['sale_date']}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
