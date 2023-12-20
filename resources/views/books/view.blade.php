@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container py-5">
        <h1 class="py-3">{{ $book->title }}</h1>
        <div class="d-flex">
            <img src="{{ $book->cover_image }}" alt="{{ $book->title }}">
            <div class="px-4">
                <p>{{ $book->plot }}</p>
                <a href="{{ route('books') }}" class="btn btn-primary">Return to movies</a>
            </div>
        </div>
    </div>

@endsection
