<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\Admin\KalenderResultController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Admin\TaskResultController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin as ADMIN;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
// landing page kalender
Route::get('kalender/list',[KalenderController::class,'listKalender'])->name('kalender.list');
Route::resource('kalender', KalenderController::class);
// landing page note
Route::get('note',[NoteController::class,'index'])->name('note.index');
Route::post('note',[NoteController::class,'create'])->name('note.create');
Route::delete('note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');
// landing page task
Route::post('task',[TaskController::class,'create'])->name('task.create');

Route::middleware('auth','admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   Route::prefix('/admin')->group(function () {
    // Route::get('/', [ADMIN\DashboardController::class, "index"])->name('dashboard');
    Route::get('/dashboard', [ADMIN\DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    //kalender
    Route::get('/kalender', [ADMIN\KalenderResultController::class, 'index'])->name('kalenders.index');
    Route::get('/kalender/create', [ADMIN\KalenderResultController::class, "create"])->name('kalenders.create');
    Route::post('/kalender/store', [ADMIN\KalenderResultController::class, "store"])->name('kalenders.store');
    Route::delete('/kalender/delete/{id}', [ADMIN\KalenderResultController::class, "delete"])->name('kalenders.delete');
    Route::get('/kalender/edit/{id}', [ADMIN\KalenderResultController::class, "edit"])->name('kalenders.edit');
    //task
    Route::get('/task', [ADMIN\TaskResultController::class, 'index'])->name('tasks.index');
    Route::get('/task/create', [ADMIN\TaskResultController::class, "create"])->name('tasks.create');
    Route::post('/task/store', [ADMIN\TaskResultController::class, "store"])->name('tasks.store');
    Route::delete('/task/delete/{id}', [ADMIN\TaskResultController::class, "delete"])->name('tasks.delete');
    Route::get('/task/edit/{id}', [ADMIN\TaskResultController::class, "edit"])->name('tasks.edit');
    });
});



require __DIR__.'/auth.php';
