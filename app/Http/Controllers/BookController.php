<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function view($id)
    {
        $book = Book::findOrFail($id);
        return view('books\view', compact('book'));
    }
}
