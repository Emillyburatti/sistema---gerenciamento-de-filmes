<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FilmeController;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('movies', FilmeController::class);
});

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/{filme}', [MovieController::class, 'show'])->name('movies.show');
