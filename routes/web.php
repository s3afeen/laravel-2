<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::resource('movies', MoviesController::class);

Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');
Route::post('/movies', [MoviesController::class, 'store'])->name('movies.store');
Route::get('/movies/create', [MoviesController::class, 'create'])->name('movies.create');
Route::get('movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');


// Route::put('/movies/{id}', [MoviesController::class, 'update'])->name('movies.update');
