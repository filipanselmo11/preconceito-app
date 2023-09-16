<?php

use App\Http\Controllers\PreconceitoController;
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

Route::get('/', [PreconceitoController::class, 'index']);
Route::get('/preconceitos/criar', [PreconceitoController::class, 'criar']);
Route::post('/preconceitos', [PreconceitoController::class, 'store']);
Route::delete('/preconceitos/{id}', [PreconceitoController::class, 'destroy']);
