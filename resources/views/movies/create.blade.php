<x-layout>{{--@extends('layouts.app')

@section('content')--}}

        <h2 class="display-6 my-2">Create Movie</h2>
        <form action="{{ route('movies.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="commentaire">Commentaire</label>
                <textarea name="commentaire" id="commentaire" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="annee">Année</label>
                <input type="date" name="annee" id="annee" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <input type="text" name="note" id="note" class="form-control" required>
            </div>


            @method('POST')
            <button type="submit" class="btn btn-success">Save</button>
        </form>

{{--@endsection--}}
</x-layout>
