<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [StoreController::class, 'index'])->name('index');
//Route::post('/stores/search', [StoreController::class, 'search']);
Route::get('/stores/no_result', [StoreController::class, 'no_result']);
Route::get('/stores/search', [StoreController::class, 'search']);
Route::post('/stores', [StoreController::class, 'preserve']);
Route::get('/stores/create', [StoreController::class, 'create'])->middleware("auth");
Route::get('/stores/{store}', [StoreController::class,'show']);
//Route::post('/stores', [StoreController::class, 'preserve']);

require __DIR__.'/auth.php';
