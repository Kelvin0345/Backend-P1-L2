<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AllergeenController;
use App\Http\Controllers\MagazijnmedewerkerController;
use App\Http\Controllers\LeverancierController;
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:magazijnmedewerker'])->group(function () {

    Route::get('/Allergeen/{id}', [AllergeenController::class, 'index'])
        ->name('Allergeen.index');

    Route::get('/Leverancier/{id}', [LeverancierController::class, 'index'])
        ->name('Leverancier.index');

    Route::get('/Leverancierpagina/{id}/producten', [LeverancierController::class, 'getGeleverdeProductenByLeverancierId'])
        ->name('leverancier.producten');

    Route::get('/magazijnmedewerker', [MagazijnmedewerkerController::class, 'index'])
        ->name('magazijnmedewerker.index');

    Route::get('/Leverancierpagina', [LeverancierController::class, 'LeverancierPagina'])
        ->name('Leverancierpagina.index');

    Route::get('/leverancier/{id}/geleverde-producten', [LeverancierController::class, 'getGeleverdeProductenByLeverancierId'])
        ->name('leverancier.geleverdeproducten');

    // Formulier voor een nieuwe levering tonen
    Route::get('/leverancier/nieuwe-levering', [LeverancierController::class, 'nieuweLeveringFormulier'])
        ->name('leverancier.nieuweLeveringFormulier');

    // Nieuwe levering verwerken
    Route::post('/leverancier/nieuwe-levering', [LeverancierController::class, 'nieuweLevering'])
        ->name('leverancier.nieuweLevering');

});


Route::middleware(['auth', 'role:manager'])->group(function () {
    
    Route::get('/manager', [ManagerController::class, 'index'])
        ->name('manager.index');
    // d
   Route::get('/leveranciers', [LeverancierController::class, 'allLeverancierUpdate'])
    ->name('Manager.showLeverancier');
    
    Route::get('/leveranciers/{id}', [LeverancierController::class, 'leverancierDetails'])
    ->name('Manager.leverancierDetails');
    
    

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
