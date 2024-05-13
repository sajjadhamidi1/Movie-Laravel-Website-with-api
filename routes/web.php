<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TvshowController;
use Illuminate\Support\Facades\Route;
//Movies
Route::get('/',[MovieController::class,'index'])->name('movies.index');
Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movies.show');
//TvShow
Route::get('/tvshow',[TvshowController::class,'index'])->name('tvshow.index');
Route::get('/tvshow/{id}', [TvshowController::class, 'show'])->name('tvshow.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
