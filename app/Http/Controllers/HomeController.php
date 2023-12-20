<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $movies = Movie::all();
        return view('home', compact('books', 'movies'));
    }
}
