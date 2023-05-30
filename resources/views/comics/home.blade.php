@extends('layouts.app')

@section('content')
<section id="all-comics">
    <div class="container h-100 d-flex justify-content-center align-items-center" id="all-comics">
        <div class="section-title d-flex justify-content-center align-items-center">
            <h4 class="text-white text-uppercase px-4 py-2">current series</h4>
        </div>
        <form action="{{route('comics.index')}}" method="GET">
            <select name="type" id="type">
                <option value="">all</option>
                <option value="comic book">comic book</option>
                <option value="graphic novel">graphic novel</option>
            </select>
            <button type="submit">Cerca</button>
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
                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button btn btn-warning" data-item-title="{{$comic->title}}">Cancella</button>
                            </form>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <a href="{{route('comics.create')}}" class="btn btn-primary">ADD NEW COMIC</a>
    </div>
</section>
@include('partials.popupdelete')
@endsection
