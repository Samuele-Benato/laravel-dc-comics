@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <a class="btn btn-dark" href="{{ route('comics.index') }}">
            Torna ai Comics
        </a>
        <a class="btn btn-warning" href="{{ route('comics.show', $comic) }}">
            Torna al dettaglio
        </a>

        <h1 class="my-3">Modifica il fumetto</h1>

        <form action="{{ route('comics.update', $comic) }}" method="POST" class="row g-3">
            @csrf
            @method('PUT')

            <div class="col-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" id="title" name="title"
                    class="form-control @error('title') is-invalid @enderror" value=" {{ old('title') ?? $comic->title }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" id="series" name="series"
                    class="form-control @error('series') is-invalid @enderror"
                    value=" {{ old('series') ?? $comic->series }}">
                @error('series')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" id="type" name="type" class="form-control @error('type') is-invalid @enderror"
                    value=" {{ old('type') ?? $comic->type }}">
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-3">
                <label for="price" class="form-label">Prezzo $</label>
                <input type="text" id="price" name="price"
                    class="form-control @error('price') is-invalid @enderror" value=" {{ old('price') ?? $comic->price }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-6">
                <label for="description" class="form-label">Descrizione</label>
                <input type="textarea" id="description" name="description"
                    class="form-control @error('description') is-invalid @enderror"
                    value=" {{ old('description') ?? $comic->description }}">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-6">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" id="thumb" name="thumb"
                    class="form-control @error('thumb') is-invalid @enderror" value=" {{ old('thumb') ?? $comic->thumb }}">
                @error('thumb')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-success">Salva</button>
        </form>
    </section>
@endsection
