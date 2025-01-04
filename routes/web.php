<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UEController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/ues', function () {
    return view('ues');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/ues', [UEController::class, 'index'])->name('ues.index');

Route::get('/saisie-notes', function () {
    return view('notes.create');
})->name('notes.create');


Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
require __DIR__.'/auth.php';
