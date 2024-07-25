<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\KalaController::class,'index']);
Route::get('/new', [\App\Http\Controllers\KalaController::class,'new']);
Route::post('/store', [\App\Http\Controllers\KalaController::class,'store'])->name('store');
Route::post('/addKala/{kala}', [\App\Http\Controllers\KalaController::class,'addKala'])->name('addKala')->middleware(['auth', 'verified']);
Route::get('admin/kalas',[\App\Http\Controllers\KalaController::class,'admin']);
Route::get('admin/users',[\App\Http\Controllers\UserController::class,'admin']);
Route::get('kala/del/{kala}',[\App\Http\Controllers\KalaController::class,'del']);
Route::get('kala/serch/',[\App\Http\Controllers\KalaController::class,'serch']);
Route::get('/dashboard', [\App\Http\Controllers\KalaController::class,'user'])->name('dashboard')->middleware(['auth', 'verified']);
Route::get('user/kala/del/{store}', [\App\Http\Controllers\KalaController::class,'usersKalaDel'])->name('')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
