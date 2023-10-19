@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <div class="row my-3">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('comics.create') }}">Crea un Fumetto</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Series</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic->id }}</th>
                                <td scope="col">{{ $comic->title }}</td>
                                <td scope="col">{{ $comic->series }}</td>
                                <td scope="col">{{ $comic->price }}</td>
                                <td scope="col">
                                    <a class="btn btn-sm btn-success" href="{{ route('comics.show', $comic) }}">
                                        Dettaglio
                                    </a>
                                    <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="mx-1">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm my-2">Elimina</button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <h3>Nessun comic trovato</h3>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
