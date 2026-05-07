<?php

use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Admin\AdminPengaduanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// USER
Route::middleware(['auth'])->group(function () {
    Route::get('/', [PengaduanController::class, 'index'])->name('dashboard');
    Route::get('/pengaduan/create', [PengaduanController::class, 'create']);
    Route::post('/pengaduan', [PengaduanController::class, 'store']);
    Route::get('/pengaduan/{id}', [PengaduanController::class, 'show']);
});

// ADMIN
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminPengaduanController::class, 'index']);
    Route::get('/pengaduan/{id}', [AdminPengaduanController::class, 'show']);
    Route::put('/pengaduan/{id}', [AdminPengaduanController::class, 'updateStatus']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';