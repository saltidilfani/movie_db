<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MovieController extends Controller
{
    public function homepage()
    {
        $movies = Movie::with('category')->latest()->paginate(6);
        return view('homepage', compact('movies'));
    }

    public function detail_movie($id, $slug)
    {
        $movie = Movie::find($id);
        return view('detail_movie', compact('movie'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('create_movie', compact('categories'));
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|max:255',
        'synopsis' => 'nullable',
        'category_id' => 'required|exists:categories,id',
        'year' => 'required|digits:4|integer',
        'actors' => 'nullable',
        'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Upload cover image
    $coverName = null;
    if ($request->hasFile('cover')) {
    $coverName = $request->file('cover')->store('cover_images', 'public');
    // file disimpan di storage/app/public/cover_images/namafile.ext
}

    // Simpan data ke database
    Movie::create([
        'title' => $request->title,
        'slug' => Str::slug($request->title),
        'synopsis' => $request->synopsis,
        'category_id' => $request->category_id,
        'year' => $request->year,
        'actors' => $request->actors,
        'cover_image' => $coverName,
    ]);

    return redirect('/')->with('success', 'Movie berhasil ditambahkan!');
}
    
}
