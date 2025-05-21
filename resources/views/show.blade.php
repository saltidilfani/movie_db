@extends('layouts.template')

@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $movie->cover_image }}" class="img-fluid rounded-start" alt="{{ $movie->title }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{ $movie->title }}</h3>
                    <p class="card-text">{{ $movie->synopsis }}</p>
                    <p><strong>Actors:</strong> {{ $movie->actors }}</p>
                    <p><strong>Category:</strong> {{ $movie->category }}</p>
                    <p><strong>Year:</strong> {{ $movie->year }}</p>
                    <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-success">See More</a>
                </div>
            </div>
        </div>
    </div>
@endsection