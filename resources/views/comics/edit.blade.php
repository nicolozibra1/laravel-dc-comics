@extends('layouts.app')
@section('title')
@endsection

@section('content')
    <main>
        <div class="jumbotron"></div>

        <h1 class="text-center fw-semibold mt-5">Modifica prodotto con id: {{ $comic->id }}</h1>

        {{-- messaggio di errore per requisiti non soddisfatti --}}
        @if ($errors->any())
        <div class="alert alert-danger container d-flex flex-wrap">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="container d-flex justify-content-center mt-5">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="title" class="form-label">Title</label>
                        <input required name="title" type="text" class="form-control  @error('title') is-invalid @enderror" id="title" value="{{$comic->title}}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="thumb" class="form-label">Image url</label>
                        <input required name="thumb" type="text" class="form-control  @error('thumb') is-invalid @enderror" id="thumb" value="{{$comic->thumb}}">
                        @error('thumb')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="type" class="form-label">Type</label>
                        <input required name="type" type="text" class="form-control  @error('type') is-invalid @enderror" id="type" value="{{$comic->type}}">
                        @error('type')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="sale_date" class="form-label">Sale date</label>
                        <input required name="sale_date" type="date" class="form-control  @error('sale_date') is-invalid @enderror" id="sale_date" value="{{$comic->sale_date}}">
                        @error('sale_date')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="writers" class="form-label">Writers</label>
                        <textarea required name="writers" type="text" class="form-control  @error('writers') is-invalid @enderror" id="writers">
                            {{$comic->writers}}
                        </textarea>
                        @error('writers')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="artists" class="form-label">Artists</label>
                        <textarea required name="artists" type="text" class="form-control  @error('artists') is-invalid @enderror" id="artists">
                            {{$comic->artists}}
                        </textarea>
                        @error('artists')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col-6">
                        <label for="series" class="form-label text-center">Series</label>
                        <input name="series" required name="series" type="text"class="form-control  @error('series') is-invalid @enderror" id="series" value="{{$comic->series}}">
                        @error('series')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="col-6 ">
                        <label for="price" class="form-label text-center">Price</label>
                        <input required name="price" type="number" min="0.01" max="90000" step="0.01" class="form-control  @error('price') is-invalid @enderror" id="price" placeholder="{{$comic->price}}">
                        @error('price')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" required placeholder="A description for the comic" name="description" type="text" class="form-control  @error('description') is-invalid @enderror" id="description">{{$comic->description}}</textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3 gap-3">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
        </div>

    </main>
@endsection
