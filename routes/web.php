<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\FundManagersController;
use App\Http\Controllers\FundsController;
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

Route::get('/', function () {
    return view('welcome');
});

// using Filament Admin Panel to avoid writing CRUD routes and views
// Route::middleware('auth')->group(function () {
//     Route::get('/companies', [CompaniesController::class, '__invoke'])->name('companies');

//     Route::get('/managers', [FundManagersController::class, 'index'])->name('managers');
//     Route::get('/managers/create', [FundManagersController::class, 'create'])->name('managers.create');
//     Route::post('/managers', [FundManagersController::class, 'store'])->name('managers.store');
//     Route::get('/managers/{company}', [FundManagersController::class, 'show'])->name('managers.show');
//     Route::get('/managers/{company}/edit', [FundManagersController::class, 'edit'])->name('managers.edit');
//     Route::patch('/managers/{company}', [FundManagersController::class, 'update'])->name('managers.update');
//     Route::delete('/managers/{company}', [FundManagersController::class, 'destroy'])->name('managers.destroy');
    
//     Route::get('/funds', [FundsController::class, 'index'])->name('funds');
//     Route::get('/funds/create', [FundsController::class, 'create'])->name('funds.create');
//     Route::post('/funds', [FundsController::class, 'store'])->name('funds.store');
//     Route::get('/funds/{company}', [FundsController::class, 'show'])->name('funds.show');
//     Route::get('/funds/{company}/edit', [FundsController::class, 'edit'])->name('funds.edit');
//     Route::patch('/funds/{company}', [FundsController::class, 'update'])->name('funds.update');
//     Route::delete('/funds/{company}', [FundsController::class, 'destroy'])->name('funds.destroy');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
