<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
Route::get('/keuzenmodules', [ModuleController::class, 'index'])->name('keuzenmodules.index') ;
Route::get('/keuzenmodules/{module}', [ModuleController::class, 'show'])->name('keuzenmodules.show') ;
Route::get('/aanmelden', [RegistrationsController::class, 'index'])->name('aanmelden');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
