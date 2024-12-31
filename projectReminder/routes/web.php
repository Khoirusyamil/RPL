<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin as ADMIN;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('kalender/list',[KalenderController::class,'listKalender'])->name('kalender.list');
Route::resource('kalender', KalenderController::class);

Route::get('note',[NoteController::class,'index'])->name('note.index');
Route::post('note',[NoteController::class,'create'])->name('note.create');
Route::delete('note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');

Route::post('task',[TaskController::class,'create'])->name('task.create');

Route::middleware('auth','admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   Route::prefix('/admin')->group(function () {
    Route::get('/', [ADMIN\DashboardController::class, "index"])->name('dashboard');
    Route::get('/dashboard', [ADMIN\DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    
    });
});



require __DIR__.'/auth.php';
