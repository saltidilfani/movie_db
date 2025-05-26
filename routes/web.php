<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MovieController::class, 'homepage']);

Route::get('/detail-movie/{id}/{slug}', [MovieController::class, 'detail_movie'])->name('detail_movie');


Route::get('/create-movies', [MovieController::class, 'create'])->name('movies.create');

Route::post('/create-movies', [MovieController::class, 'store'])->name('movies.store');
