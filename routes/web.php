<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

// ========================== Admin Section Start ==========================
Route::prefix('admin')->name('admin.')->middleware(['auth','role:admin'])->group(function (){
    Route::get("dashboard", [AdminController::class, 'dashboard'])->name('dashboard');
});
// ========================== Admin Section End ==========================

// ========================== Trainer Section Start ==========================
Route::prefix('trainer')->middleware(['auth','role:trainer'])->name('trainer.')->group(function (){
    Route::get("dashboard", [TrainerController::class, 'dashboard'])->name('dashboard');
});
// ========================== Trainer Section End ==========================

// ========================== Student Section Start ==========================
Route::middleware(['auth','role:student'])->group(function (){
    Route::get("dashboard", [StudentController::class, 'dashboard'])->name('dashboard');
});
// ========================== Student Section End ==========================


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
