<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index()
    {
        $movies= Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'commentaire' => 'required|string',
            'note' => 'required|numeric',
            'annee' => 'required|date',

        ]);


        DB::table('movies')->insert([
            'title' => $request->title,
            'commentaire' => $request->commentaire,
            'annee' => $request->annee,
            'note' => $request->note
        ]);
        return redirect()->route('movies.index')->with('success', 'Movie created successfully.');
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'commentaire' => 'required|string',
            'note' => 'required|float',
            'annee' => 'required|date',
        ]);

        /*$movie->update($request->all());*/
        DB::table('movies')
            ->where('id', $movie->id)
            ->update([
            'title' => $request->title,
            'commentaire' => $request->commentaire,
            'annee' => $request->annee,
            'note' => $request->note
        ]);
        return redirect()->route('movies.index')->with('success', 'Movie updated successfully.');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully.');
    }
}
