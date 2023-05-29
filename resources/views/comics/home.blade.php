@extends('layouts.app')

@section('content')
<section id="all-comics">
    <div class="container h-100 d-flex justify-content-center align-items-center" id="all-comics">
        <div class="section-title d-flex justify-content-center align-items-center">
            <h4 class="text-white text-uppercase px-4 py-2">current series</h4>
        </div>
        <div class="row d-flex">
            @foreach ($comics as $comic )
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-2 p-1 debug d-flex justify-content-center align-items-center">
                <a href="{{route('comics.show', ['comic' => $comic->id])}}">
                    <div class="card mt-3">
                        <div class="card-image">
                            <div class="box-image">
                                <img src="{{$comic->thumb}}" alt="comic" >
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="name">
                                <span class="title text-uppercase">
                                    {{ $comic->series }}
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <button class="px-5 py-2">
            load more
        </button>
    </div>
</section>
@endsection
