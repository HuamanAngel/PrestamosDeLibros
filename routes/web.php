<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ItinerarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserAdmin;

Route::get('/', [BookController::class, 'index'])->name('book.show');
Route::get('/book', [BookController::class, 'index'])->name('book.show');
Route::get('/book/{id}', [BookController::class, 'editForm'])->name('book.form.edit');
Route::get('/form/book', [BookController::class, 'form'])->name('book.form.store');
Route::post('/book', [BookController::class, 'store'])->name('book.store');
Route::post('/book/borrow', [BookController::class, 'borrowBook'])->name('book.borrow');

Auth::routes();
