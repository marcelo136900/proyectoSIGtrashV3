<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MapElementCrudController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', [AdminController::class, 'index'])->middleware('role:admin');

Route::get('/map', [MapController::class, 'index'])->name('map');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/map/save', [MapDataController::class, 'store'])->name('map.save');
    Route::get('/map/load', [MapDataController::class, 'load'])->name('map.load');

    Route::post('/map/save', [MapElementCrudController::class, 'save'])->middleware('auth');
    Route::get('/map/load', [MapElementCrudController::class, 'load'])->middleware('auth');
});

require __DIR__.'/auth.php';