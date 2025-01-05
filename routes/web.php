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
Route::resource('ues', UEController::class);
Route::resource('ecs', ECController::class);

Route::get('/ues', [UEController::class, 'index'])->name('ues.index');
Route::get('/ues/{id}', [UEController::class, 'show'])->name('ues.show');
Route::get('/ues/creat', [UEController::class, 'creat'])->name('ues.creat');
Route::get('/ues/edit', [UEController::class, 'edit'])->name('ues.edit');


Route::get('/ecs', [UEController::class, 'index'])->name('ecs.index');
Route::get('/ecs/{id}', [UEController::class, 'show'])->name('ecs.show');
Route::get('/ecs/creat', [UEController::class, 'creat'])->name('ecs.creat');
Route::get('/ecs/edit', [UEController::class, 'edit'])->name('ecs.edit');
Route::post('/ues', [UEController::class, 'store'])->middleware('auth');
Route::post('/ues', [UEController::class, 'store']);
Route::post('/ues', [UEController::class, 'store'])->name('ues.store');



require __DIR__.'/auth.php';
