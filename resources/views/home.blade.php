@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main class="py-5">
        <section class="container">
            <h2 class="py-3">movies</h2>
            <div class="row">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col-3">
                        <div class="card h-100">
                            <img src="{{ $books[$i]->cover_image }}" class="card-img-top" alt="{{ $books[$i]->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $books[$i]->title }}</h5>
                                <p class="card-text">{{ substr($books[$i]->plot, 0, 100) }}...</p>
                                <a href="{{ route('movies.view', $books[$i]->id) }}" class="btn btn-primary">More
                                    informations</a>
                            </div>
                        </div>
                    </div>
                @endfor
                <a href="{{ route('movies') }}" class="btn btn-primary col-3 align-self-center">More books</a>

            </div>
        </section>
        <section class="container">
            <h2 class="py-3">Movies</h2>
            <div class="row">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col-3">
                        <div class="card h-100">
                            <img src="{{ $movies[$i]->image }}" class="card-img-top" alt="{{ $movies[$i]->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movies[$i]->title }}</h5>
                                <p class="card-text">{{ substr($movies[$i]->plot, 0, 100) }}...</p>
                                <a href="{{ route('movies.view', $movies[$i]->id) }}" class="btn btn-success">More
                                    informations</a>
                            </div>
                        </div>
                    </div>
                @endfor
                <a href="{{ route('movies') }}" class="btn btn-success col-3 align-self-center">More Movies</a>

            </div>
        </section>
    </main>
@endsection
