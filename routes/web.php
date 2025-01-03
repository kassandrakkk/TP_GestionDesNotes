<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UEController;
use App\Http\Controllers\ECController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Tableau de bord
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Routes pour la gestion des UEs
Route::resource('ues', UEController::class);

// Routes pour la gestion des ECs
Route::resource('ecs', ECController::class);

// Routes pour la gestion des Notes
Route::resource('notes', NoteController::class);

// Route pour afficher les résultats
Route::get('/results', [NoteController::class, 'results'])->name('results');
