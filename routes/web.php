<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', function () 
//{
//    return view('stores/index'); 
//});

Route::get('/', [StoreController::class, 'index']);
Route::post('/stores', [StoreController::class, 'preserve']);
Route::get('/stores/create', [StoreController::class, 'create']);
Route::get('/stores/{store}', [StoreController::class ,'show']);
//Route::post('/stores', [StoreController::class, 'preserve']);

