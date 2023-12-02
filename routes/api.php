<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::get('/',[AuthorsController::class,'index'])->name('authors.index');
// Route::post('/authors',[AuthorsController::class,'store'])->name('authors.store');
// Route::delete('/authors/{id}',[AuthorsController::class,'destroy'])->name('authors.destroy');
// Route::put('/authors/{id}',[AuthorsController::class,'update'])->name('authors.update');
// Route::get('/authors_edit/{id}',[AuthorsController::class,'edit'])->name('authors.edit');

// Route::get('/books',[BooksController::class,'index'])->name('books.index');
// Route::post('/books',[BooksController::class,'store'])->name('books.store');
// Route::delete('/books/{id}',[BooksController::class,'destroy'])->name('books.destroy');
// Route::put('/books/{id}',[BooksController::class,'update'])->name('books.update');
// Route::get('/books_edit/{id}',[BooksController::class,'edit'])->name('books.edit');


// manera de dar las rutas de manera general, con el resource obtenemos los metodos dentro del controlador
Route::apiResource("Books",BooksController::class);
Route::apiResource("Authors",AuthorsController::class);
