@extends('layouts.app')

@section('main-content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <h4>Correggi i seguenti errori per proseguire:</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="container mt-5">
        <a href="{{ route('comics.index') }}" class="btn btn-dark">
            Torna ai Comics
        </a>

        <h1 class="my-3">Crea un fumetto</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-4">
                    <img src="" id="preview-image" class="img-fluid" alt="image">
                </div>

                <div class="col-8">
                    <div class="row">
                        <div class="col-4">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" id="title" name="title" class="form-control"
                                placeholder="Comic title" value="{{ old('title') }}">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-4">
                            <label for="series" class="form-label">Serie</label>
                            <input type="text" id="series" name="series" class="form-control"
                                placeholder="Comic series" value="{{ old('series') }}">
                            @error('series')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-4">
                            <label for="type" class="form-label">Tipologia</label>
                            <input type="text" id="type" name="type" class="form-control"
                                placeholder="Comic type" value="{{ old('type') }}">
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-4">
                            <label for="price" class="form-label">Prezzo $</label>
                            <input type="text" id="price" name="price" class="form-control"
                                placeholder="Comic $price" value="{{ old('price') }}">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-4">
                            <label for="thumb" class="form-label">Immagine</label>
                            <input type="text" id="thumb" name="thumb" class="form-control"
                                placeholder="Comic img url" value="{{ old('thumb') }}">
                            @error('thumb')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-4">
                            <label for="sale_date" class="form-label">Data</label>
                            <input type="date" id="sale_date" name="sale_date" class="form-control"
                                placeholder="Comic img url" value="{{ old('sale_date') }}">
                            @error('sale_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label">Descrizione</label>
                            <input type="textarea" id="description" name="description" class="form-control"
                                placeholder="Comic description" value="{{ old('description') }}">
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
            <button class="btn btn-success w-100 my-3">Salva</button>
        </form>
    </section>
@endsection
