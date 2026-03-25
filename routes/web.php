<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('libri',[BookController::class, 'index']
)->name('book.index');

Route::get('dettaglio/{id}', [BookController::class, 'show'])->name('book.show');


Route::get('contact_us', [BookController::class, 'contact_us'])->name('contattaci');


route::post('contact_us', [BookController::class, 'contact_us_send'])->name('contattaci.send');