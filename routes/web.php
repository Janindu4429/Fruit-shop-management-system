<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Stock', function () {
    return view('Stock');
});

Route::get('/Supplier', function () {
    return view('Supplier');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/admin', function () {
    return view('backend.dashboard');
});

Route::get('/shopowner', function () {
    return view('backend.shopowner');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
