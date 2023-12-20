@extends('layouts.app')

@section('title', 'Movies')
@section('content')
    <section class="container">
        <h2 class="py-3 "><a href="{{ route('home') }}" class="text-success"><i class="fa-solid fa-arrow-left"></i> Back to
                home</a>
        </h2>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3 py-3">
                    <div class="card h-100">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text"><strong>Vote: </strong>{{ $movie->vote }}</p>
                            <a href="{{ route('movies.view', $movie->id) }}" class="btn btn-success">More
                                informations</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
