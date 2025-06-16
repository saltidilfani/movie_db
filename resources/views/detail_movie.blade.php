@extends('layouts.template')

@section('content')
<div class="col-lg-12">
    <div class="card mb-3 p-3">
        <div class="row g-0">
            <div class="col-md-4 position-relative">
                <img src="{{ asset('storage/'.$movie->cover_image) }}" 
                     class="img-fluid rounded-start h-100"
                     style="object-fit: cover;" 
                     alt="{{ $movie->title }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title fw-bold mb-3" style="font-size: 1.6rem;">
                        {{ $movie->title }}
                    </h4>

                    <p class="card-text" style="text-align: justify;">
                        {{ $movie->release_date }} {{ $movie->rating }} 
                        {{ $movie->synopsis }}
                    </p>

                    <p class="card-text"><strong>Actors:</strong> {{ $movie->actors }}</p>
                    <p class="card-text"><strong>Category:</strong> {{ $movie->category->category_name }}</p>
                    <p class="card-text"><strong>Year:</strong> {{ $movie->year }}</p>

                    <a href="/" class="btn btn-success mt-2">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
