@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <div class="row g-3">
            <div class="col-4 col-lg-3 col-md-6 col-sm-12 ">
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="comic img">
            </div>
            <div class="col-8 col-lg-9 col-md-6 col-sm-12 d-flex align-items-center">
                <div class="row g-3 ">
                    <div class="col-4">
                        <strong>Id: </strong> {{ $comic->id }}
                    </div>
                    <div class="col-4">
                        <strong>Title: </strong> {{ $comic->title }}
                    </div>
                    <div class="col-4">
                        <strong>Series: </strong> {{ $comic->series }}
                    </div>
                    <div class="col-4">
                        <strong>Type: </strong> {{ $comic->type }}
                    </div>
                    <div class="col-4">
                        <strong>Price: </strong> {{ $comic->price }}
                    </div>
                    <div class="col-4">
                        <strong>Sale Date: </strong> {{ $comic->sale_date }}
                    </div>
                    <div class="col-12">
                        <strong>Description: </strong> {{ $comic->description }}
                    </div>
                    <div class="col-12">
                        <a class="btn btn-dark btn-sm" href="{{ route('comics.index') }}">
                            Torna ai Comics
                        </a>
                        <a class="btn btn-warning btn-sm" href= "{{ route('comics.edit', $comic) }}">
                            Modifica
                        </a>
                        <form class="d-inline-block ms-auto" action="{{ route('comics.destroy', $comic) }}" method="POST"
                            class="mx-1">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
