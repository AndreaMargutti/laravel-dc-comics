<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home'])->name('pages.home');
Route::get('/cards', [CardController::class, 'index'])->name('cards.index');
Route::post('/cards', [CardController::class, 'store'])->name('cards.store');
Route::get('/cards/create', [CardController::class, 'create'])->name('cards.create');
Route::get('/cards/{id}', [CardController::class, 'show'])->name('cards.show');
Route::get('/cards/{id}/edit', [CardController::class, 'edit'])->name('cards.edit');
Route::put('/cards/{id}', [CardController::class, "update"])->name('cards.update');
Route::delete("/cards/{id}", [CardController::class, "destroy"])->name("cards.delete");
