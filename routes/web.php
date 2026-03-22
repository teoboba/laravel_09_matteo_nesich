<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('libri',[BookController::class, 'index']
)->name('book.index');

Route::get('dettaglio/{id}', [BookController::class, 'show'])->name('book.show');



