<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function view($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies\view', compact('movie'));
    }
}
