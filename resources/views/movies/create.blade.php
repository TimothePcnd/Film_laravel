{{--@extends('layouts.app')

@section('content')--}}
    <div class="container">
        <h1>Create Movie</h1>
        <form action="{{ route('movies.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Commentaire</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="date">Année</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="number">Note</label>
                <input type="number" name="number" id="number" class="form-control" required>
            </div>


            @method('POST')
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
{{--@endsection--}}
