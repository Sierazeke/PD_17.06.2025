<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AlgoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/books', [BookController::class, 'index'])->name('book.index');
Route::get('/books/create', [BookController::class, 'create'])->name('book.create');
Route::post('/books', [BookController::class, 'store'])->name('book.store');
Route::get('/books/{book}', [BookController::class, 'show'])->name('book.show');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::put('/books/{book}/update', [BookController::class, 'update'])->name('book.update');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('book.destroy');


Route::get('/bubble', [AlgoController::class, 'bubbleSort'])->name('algo.sort');