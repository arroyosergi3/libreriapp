<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DealController;
use App\Http\Middleware\EsAdmin; // Esta es la importación correcta


Route::get('/', function () {
    return view('books.index');
});
Route::get('/', [BookController::class, 'indexAll'])->name('todos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// MIAS
//CRUD USER
Route::delete('/deleteUser{user}', [ProfileController::class, 'deleteUser'])->middleware(['auth', EsAdmin::Class])->name('deleteUser');
Route::patch('/profile/updateUser/{user}', [ProfileController::class, 'updateUser'])->middleware(['auth', EsAdmin::class])->name('profile.updateUser');
Route::post('/deals', [DealController::class, 'store'])->name('deals.store');


Route::get('/deals/pending', [DealController::class, 'pendingDeals'])->middleware('auth')->name('misSolicitudes');
Route::put('/deals/{deal}', [DealController::class, 'update'])->name('deals.update');

Route::get('/editUser/{user}', [ProfileController::class, 'editUser'])->middleware(['auth', EsAdmin::Class])->name('editUser');
Route::get('/misLibros', [BookController::class, 'mios'])->middleware(['auth', 'verified'])->name('mios');
Route::get('/admin', [ProfileController::class, 'crud'])->middleware(['auth', EsAdmin::Class])->name('crud');
Route::post('/book/{book}', [BookController::class, 'cambiar'])->name('cambiar');

Route::resource('book', BookController::class)->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';
