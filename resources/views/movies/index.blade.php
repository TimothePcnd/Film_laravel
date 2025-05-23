<x-layout>

{{--@extends('layouts.app')

@section('content')--}}

        <h2 class="display-6 my-2">Liste de films</h2>
        <a href="{{ route('movies.create') }}" class="btn btn-success mb-3">Crée un nouveau film</a>

        @if ($movies->count())
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title🎬</th>
                    <th>Commentaire📝</th>
                    <th>Année🗓️</th>
                    <th>Note🌟</th>
                    <th>Actions🛠️</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->commentaire }}</td>
                        <td><span>{{ \Carbon\Carbon::parse($movie->annee)->format('Y') }}</span></td>
                        <td>{{ $movie->note }}</td>
                        <td>
                            <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>No movies available.</p>
        @endif
{{--@endsection--}}

</x-layout>
