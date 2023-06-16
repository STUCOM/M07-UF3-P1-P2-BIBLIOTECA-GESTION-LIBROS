<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/show/{isbn}', [BookController::class, 'show'])->name('books.show');Route::get('/show/{isbn}', [BookController::class, 'show'])->name('books.show');
Route::get('/create', [BookController::class, 'create'])->name('books.create');
Route::post('/store', [BookController::class, 'store'])->name('books.store');
Route::get('/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/{id}', [BookController::class, 'destroy'])->name('books.destroy');

