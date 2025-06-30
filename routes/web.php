<?php

use App\Http\Controllers\EnseignementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenseeController;
use App\Http\Controllers\ProfileController;
use App\Models\Categorie;
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
});

require __DIR__ . '/auth.php';

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('index');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/evangelisation', [HomeController::class, 'salut'])->name('salut');
    Route::get('/evangelisation/salut', [HomeController::class, 'chemin'])->name('chemin');
    Route::get('/enseigement', [HomeController::class, 'enseig'])->name('enseig');
    Route::get('/pensees', [PenseeController::class, 'index'])->name('pensee');
});

Route::get('/pensees/{pensee}', [PenseeController::class, 'show'])->name('pensees.show');
Route::get('/enseignements', [EnseignementController::class, 'index'])->name('enseignements.index');
Route::get('/enseingements/{enseig}', [EnsurePunctuation::class, 'index'])->name('enseignements.show');

Route::middleware('auth')->group(function () {
    Route::post('/pensees', [PenseeController::class, 'store'])->name('pensees.store');
    Route::post('/enseignements', [EnseignementController::class, 'store'])->name('enseignements.store');
});
