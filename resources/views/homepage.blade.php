@extends('layouts.template')

@section('content')
@php
    use Illuminate\Support\Str;
@endphp

<div class="container mt-4">
    <h2 class="mb-4 fw-bold text-dark">Latest Movie</h2>

    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="row g-0">
                        <div class="col-md-4 position-relative">
                            <img src="{{ asset('storage/' . $movie->cover_image) }}"
                                 class="img-fluid rounded-start h-100"
                                 style="object-fit: cover;" 
                                 alt="{{ $movie->title }}">

                            <div class="position-absolute bottom-0 end-0 bg-dark text-white px-2 py-1 rounded-start">
                                {{ $movie->rating }}
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $movie->title }}</h5>

                                <p class="card-text" style="text-align: justify;">
                                    {{ Str::limit($movie->synopsis, 130, '...') }}
                                </p>

                                <p class="card-text">
                                    <strong>Year:</strong> {{ $movie->year }}
                                </p>

                                <a href="{{ url('/detail-movie/'.$movie->id.'/'.$movie->slug) }}" 
                                   class="btn btn-success btn-sm">
                                    See More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
