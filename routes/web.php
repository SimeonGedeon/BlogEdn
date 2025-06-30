<?php

use App\Http\Controllers\EnseignementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenseeController;
use App\Http\Controllers\ProfileController;
use App\Models\Categorie;
use App\Models\Enseignement;
use App\Models\User;
use Illuminate\Console\View\Components\Mutators\EnsurePunctuation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    /* Categorie::create([
        'nom'=>"Foi Chretienne"
    ]); */

    $categories = Categorie::all();

    return view('admin.dash', compact('categories'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/pensees', [PenseeController::class, 'store'])->name('pensees.store');
    Route::post('/enseignements', [EnseignementController::class, 'store'])->name('enseignements.store');
});

require __DIR__ . '/auth.php';

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('index');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/evangelisation', [HomeController::class, 'salut'])->name('salut');
    Route::get('/evangelisation/salut', [HomeController::class, 'chemin'])->name('chemin');
});

Route::prefix('/enseignements')->group(function () {
    Route::get('/', [EnseignementController::class, 'index'])->name('enseignements.index');
    Route::get('/{enseig}', [EnseignementController::class, 'show'])->name('enseignements.show');
});

Route::prefix('/pensees')->group(function () {
    Route::get('/', [PenseeController::class, 'index'])->name('pensees.index');
    Route::get('/{pensee}', [PenseeController::class, 'show'])->name('pensees.show');
});
