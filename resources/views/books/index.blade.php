@extends('layouts.app')

@section('title', 'Books')
@section('content')
    <section class="container">
        <h2 class="py-3"><a href="{{ route('home') }}"><i class="fa-solid fa-arrow-left"></i> Back to home</a></h2>
        <div class="row">
            @foreach ($books as $book)
                <div class="col-3">
                    <div class="card h-100">
                        <img src="{{ $book->cover_image }}" class="card-img-top" alt="{{ $book->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{{ substr($book->plot, 0, 100) }}...</p>
                            <a href="{{ route('books.view', $book->id) }}" class="btn btn-primary">More
                                informations</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
