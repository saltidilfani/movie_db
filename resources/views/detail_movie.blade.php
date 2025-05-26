@extends('layouts.template')

@section('content')
<div class="col-lg-12">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                @if ($movie->cover_image)
                    <img src="{{ asset('covers/' . $movie->cover_image) }}" class="img-fluid rounded-start" alt="{{ $movie->title }}">
                @else
                    <img src="https://via.placeholder.com/200x300?text=No+Image" class="img-fluid rounded-start" alt="No Cover">
                @endif
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }} ({{ $movie->year }})</h5>
                    <p class="card-text"><strong>Synopsis:</strong> {{ $movie->synopsis }}</p>
                    <p class="card-text"><strong>Category:</strong> {{ $movie->category->category_name }}</p>
                    <p class="card-text"><strong>Actors:</strong> {{ $movie->actors }}</p>
                    <a href="{{ url('/') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
