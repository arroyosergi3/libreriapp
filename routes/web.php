<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EsAdmin; // Esta es la importación correcta


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

// MIAS
Route::get('/misLibros', [BookController::class, 'mios'])->middleware(['auth', 'verified'])->name('mios');
Route::get('/admin', [ProfileController::class, 'crud'])->middleware(['auth', EsAdmin::Class])->name('crud');
Route::post('/book/{book}', [BookController::class, 'cambiar'])->name('cambiar');
// PORTEGER CON MI MIDDLEWARE, USAR LITERAL:  ->middleware(['auth', 'admin'])
Route::resource('book', BookController::class);
require __DIR__.'/auth.php';
