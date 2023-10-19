@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">series</th>
                    <th scope="col">price</th>
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
                            <a href="{{ route('comics.show', $comic) }}">
                                Vedi dettaglio
                            </a>
                        </td>
                    </tr>

                @empty
                    <h3>Nessun comic trovato</h3>
                @endforelse
            </tbody>
        </table>
    </section>
@endsection
