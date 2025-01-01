<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\NoteController;

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
Route::resource('etudiants', EtudiantController::class);
Route::resource('notes', NoteController::class);
Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');

Route::get('etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');
Route::get('etudiants/create', [EtudiantController::class, 'create'])->name('etudiants.create');
Route::post('etudiants', [EtudiantController::class, 'store'])->name('etudiants.store');
Route::get('etudiants/{id}', [EtudiantController::class, 'show'])->name('etudiants.show');
Route::get('etudiants/{id}/edit', [EtudiantController::class, 'edit'])->name('etudiants.edit');
Route::put('etudiants/{id}', [EtudiantController::class, 'update'])->name('etudiants.update');
Route::delete('etudiants/{id}', [EtudiantController::class, 'destroy'])->name('etudiants.destroy');
require __DIR__.'/auth.php';
