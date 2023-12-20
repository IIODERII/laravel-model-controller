@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <ul>
        @foreach ($books as $book)
            <li><a href="{{ route('books.view', $book->id) }}">{{ $book->title }}</a></li>
        @endforeach
    </ul>
@endsection
