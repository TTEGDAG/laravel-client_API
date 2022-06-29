<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ClientController::class, 'index']); 
Route::get('/index', [ClientController::class, 'index'])->name('index'); 
Route::get('/add', [ClientController::class, 'create'])->name('add');
Route::post('/store', [ClientController::class, 'store'])->name('store');
Route::get('/edit{id}', [ClientController::class, 'edit'])->name('edit');
Route::get('/show{id}', [ClientController::class, 'show'])->name('show');

Route::put('/update{id}', [ClientController::class, 'update'])->name('update');
Route::delete('/{client}', [ClientController::class, 'delete'])->name('delete');