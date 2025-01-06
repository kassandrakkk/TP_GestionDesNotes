<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UEController;
use App\Http\Controllers\ECController;

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

Route::resource('ues', UEController::class);  // Cette ligne gère toutes les routes des UEs automatiquement.
Route::resource('ecs', ECController::class);  // Cette ligne gère toutes les routes des ECs automatiquement.

Route::get('/ues', [UEController::class, 'index'])->name('ues.index');
Route::get('/ues/{id}', [UEController::class, 'show'])->name('ues.show');
Route::get('/ues/create', [UEController::class, 'create'])->name('ues.create'); // Correcte 'creat' en 'create'
Route::get('/ues/{id}/edit', [UEController::class, 'edit'])->name('ues.edit');

Route::get('/ecs', [ECController::class, 'index'])->name('ecs.index');
Route::get('/ecs/{id}', [ECController::class, 'show'])->name('ecs.show');
Route::get('/ecs/create', [ECController::class, 'create'])->name('ecs.create'); // Correcte 'creat' en 'create'
Route::get('/ecs/{id}/edit', [ECController::class, 'edit'])->name('ecs.edit');

Route::post('/ues', [UEController::class, 'store'])->middleware('auth');  // Supprime l'autre route post '/ues' en double
Route::post('/ues', [UEController::class, 'store'])->name('ues.store');

require __DIR__.'/auth.php';
