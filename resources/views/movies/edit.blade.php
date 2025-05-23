<x-layout>{{--@extends('layouts.app')

@section('content')--}}
<h1>Edit Post</h1>

<form method="POST" action="{{ route('movie.update', $movie->id) }}" enctype="multipart/form-data" class="p-4">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $movie->title }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Commentaire</label>
        <textarea name="description" id="description" class="form-control" required>{{ $movie->description }}</textarea>
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">Année de sortie</label>
        <input type="date" name="date" id="date" class="form-control" value="{{ $movie->date }}" required>
    </div>

    <div class="mb-3">
        <label for="number" class="form-label">Titre</label>
        <input type="number" name="number" id="number" class="form-control" value="{{ $movie->number }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>
{{--
@endsection --}}
</x-layout>
