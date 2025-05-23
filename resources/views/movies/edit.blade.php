<x-layout>{{--@extends('layouts.app')

@section('content')--}}
<h2 class="display-6 my-2">Edit Post</h2>

<form method="POST" action="{{ route('movies.update', $movie->id) }}" enctype="multipart/form-data" class="p-4">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $movie->title }}" required>
    </div>

    <div class="mb-3">
        <label for="commentaire" class="form-label">Commentaire</label>
        <textarea name="commentaire" id="commentaire" class="form-control" required>{{ $movie->commentaire }}</textarea>
    </div>

    <div class="mb-3">
        <label for="annee" class="form-label">Année</label>
        <input type="date" name="annee" id="annee" class="form-control" value="{{ $movie->annee }}" required>
    </div>

    <div class="mb-3">
        <label for="note" class="form-label">Note</label>
        <input type="text" name="note" id="note" class="form-control" value="{{ $movie->note }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>
{{--
@endsection --}}
</x-layout>
