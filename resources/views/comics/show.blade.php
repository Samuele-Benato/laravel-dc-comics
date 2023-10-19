@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <div class="row g-3">
            <div class="col-4">
                <strong>Id: </strong> {{ $comic->id }}
            </div>
            <div class="col-4">
                <strong>title: </strong> {{ $comic->title }}
            </div>
            <div class="col-4">
                <strong>series: </strong> {{ $comic->series }}
            </div>
            <div class="col-4">
                <strong>type: </strong> {{ $comic->type }}
            </div>
            <div class="col-4">
                <strong>price: </strong> {{ $comic->price }}
            </div>
            <div class="col-4">
                <strong>sale_date: </strong> {{ $comic->sale_date }}
            </div>
            <div class="col">
                <strong>description: </strong> {{ $comic->description }}
            </div>
            <td scope="col">
                <a href="{{ route('comics.index', $comic) }}">
                    Torna alla lista
                </a>
            </td>
        </div>
    </section>
@endsection
