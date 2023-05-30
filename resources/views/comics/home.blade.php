@extends('layouts.app')

@section('content')
<section id="all-comics">
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center" id="all-comics">
        <div class="section-title d-flex justify-content-center align-items-center">
            <h4 class="text-white text-uppercase px-4 py-2">current series</h4>
        </div>
        <form action="{{route('comics.index')}}" method="GET" class="w-50 bg-primary px-5 py-2 rounded-2 d-flex justify-content-center align-items-center">
            <i class="fa-solid fa-filter text-white pe-2"></i>
            <h6 class="text-white fw-semibold mt-2 pe-4">FILTER</h6>
            <label for="type" class="text-white fst-italic pe-1">Type:</label>
            <select name="type" id="type" class="rounded-2 py-1">
                <option value="">all</option>
                <option value="comic book">comic book</option>
                <option value="graphic novel">graphic novel</option>
            </select>
            <button type="submit" class="ms-4 rounded-2">Cerca</button>
        </form>
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
        @endif
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
        <a href="{{route('comics.create')}}" class="btn btn-success">ADD NEW COMIC</a>
    </div>
</section>
@include('partials.popupdelete')
@endsection
