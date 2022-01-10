<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\LibraryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//rotta pubblica
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//rotta della library
Route::get('/library.index', [LibraryController::class, 'index'])->name('library.index');
Route::get('/library.create', [LibraryController::class, 'create'])->name('library.create');
Route::get('/library.edit.{library}', [LibraryController::class, 'edit'])->name('library.edit');
Route::post('/library.store', [LibraryController::class, 'store'])->name('library.store');
Route::get('/library.show.{library}.{name?}', [LibraryController::class, 'show'])->name('library.show');
Route::put('/library.update.{library}', [LibraryController::class, 'update'])->name('library.update');
Route::delete('/library.delete.{library}', [LibraryController::class, 'destroy'])->name('library.destroy');