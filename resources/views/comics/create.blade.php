@extends('layouts.app')

@section('main-content')
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
                                placeholder="Comic title" required>
                        </div>

                        <div class="col-4">
                            <label for="series" class="form-label">Serie</label>
                            <input type="text" id="series" name="series" class="form-control"
                                placeholder="Comic series" required>
                        </div>

                        <div class="col-4">
                            <label for="type" class="form-label">Tipologia</label>
                            <input type="text" id="type" name="type" class="form-control"
                                placeholder="Comic type" required>
                        </div>

                        <div class="col-4">
                            <label for="price" class="form-label">Prezzo $</label>
                            <input type="text" id="price" name="price" class="form-control"
                                placeholder="Comic $price" required>
                        </div>

                        <div class="col-4">
                            <label for="thumb" class="form-label">Immagine</label>
                            <input type="text" id="thumb" name="thumb" class="form-control"
                                placeholder="Comic img url" required>
                        </div>

                        <div class="col-4">
                            <label for="sale_date" class="form-label">Data</label>
                            <input type="date" id="sale_date" name="sale_date" class="form-control"
                                placeholder="Comic img url" required>
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label">Descrizione</label>
                            <input type="textarea" id="description" name="description" class="form-control"
                                placeholder="Comic description" required>
                        </div>

                    </div>
                </div>
            </div>
            <button class="btn btn-success w-100 my-3">Salva</button>
        </form>
    </section>
@endsection
