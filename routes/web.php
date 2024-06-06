<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
Route::get('/keuzemodules', [ModuleController::class, 'index'])->name('keuzemodules.index') ;
Route::get('/keuzemodules/{module}', [ModuleController::class, 'show'])->name('keuzemodules.show') ;
Route::get('/aanmelden', [RegistrationsController::class, 'index'])->name('aanmelden');
Route::post('/aanmelden/store', [RegistrationsController::class, 'store'])->name('registration.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
