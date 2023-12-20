@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <div class="container py-5">
        <h1 class="py-3">{{ $movie->title }}</h1>
        <div class="d-flex">
            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
            <div class="px-4">
                <p><strong>Original title: </strong>{{ $movie->original_title }}</p>
                <p><strong>Original language: </strong>{{ $movie->language }}</p>
                <p><strong>Vote: </strong>{{ $movie->vote }}</p>
                <a href="{{ route('movies') }}" class="btn btn-success">Return to movies</a>
            </div>
        </div>
    </div>

@endsection
