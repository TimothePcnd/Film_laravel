<x-layout>

{{--@extends('layouts.app')

@section('content')--}}
    <div class="container">
        <h1>Movie Manager</h1>
        <a href="{{ route('movies.create') }}" class="btn btn-primary mb-3">Create Movie</a>

        @if ($movies->count())
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Commentaire</th>
                    <th>Année</th>
                    <th>Note</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->commentaire }}</td>
                        <td>{{ $movie->annee }}</td>
                        <td>{{ $movie->note }}</td>
                        <td>
                            <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>No movies available.</p>
        @endif
    </div>
{{--@endsection--}}

</x-layout>
