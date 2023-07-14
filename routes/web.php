<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChildController;

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

Route::get('/', [ChildController::class, 'index']);
Route::post('/', [ChildController::class, 'store']);
Route::get('/delete/{id}', [ChildController::class, 'destroy'])->name("delete");


