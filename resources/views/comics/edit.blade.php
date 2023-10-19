@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <a href="{{ route('comics.index') }}" class="btn btn-success">
            Torna ai Comics
        </a>

        <h1 class="my-3">Modifica il fumetto</h1>

        <form action="{{ route('comics.update', $comic) }}" method="POST" class="row g-3">
            @csrf
            @method('PUT')

            <div class="col-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" id="title" name="title" class="form-control" value=" {{ $comic->title }}">
            </div>

            <div class="col-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" id="series" name="series" class="form-control" value=" {{ $comic->series }}">
            </div>

            <div class="col-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" id="type" name="type" class="form-control" value=" {{ $comic->type }}">
            </div>

            <div class="col-3">
                <label for="price" class="form-label">Prezzo $</label>
                <input type="text" id="price" name="price" class="form-control" value=" {{ $comic->price }}">
            </div>

            <div class="col-6">
                <label for="description" class="form-label">Descrizione</label>
                <input type="textarea" id="description" name="description" class="form-control"
                    value=" {{ $comic->description }}">
            </div>

            <div class="col-6">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" id="thumb" name="thumb" class="form-control" value=" {{ $comic->thumb }}">
            </div>

            <button class="btn btn-success">Salva</button>
        </form>
    </section>
@endsection