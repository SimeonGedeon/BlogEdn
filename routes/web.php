<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenseeController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return view('admin.dash');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('index');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/evangelisation', [HomeController::class, 'salut'])->name('salut');
    Route::get('/enseigement', [HomeController::class, 'enseig'])->name('enseig');
    Route::get('/pensee-du-jour', [HomeController::class, 'enseig'])->name('pensee');
});

Route::get('/pensees', [PenseeController::class, 'index'])->name('pensees.index');
Route::get('/pensees/{pensee}', [PenseeController::class, 'show'])->name('pensees.show');

Route::middleware('auth')->group(function () {
    Route::post('/pensees', [PenseeController::class, 'store'])->name('pensees.store');
    // Ajouter d'autres routes privées ici si besoin (edit, update, delete)
});
