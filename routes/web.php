<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/create', [ProductController::class, 'create'])->name('create');
Route::post('/', [ProductController::class, 'store'])->name('store');
Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
Route::put('/update/{product}', [ProductController::class, 'update'])->name('update');
Route::delete('/delete/{product}', [ProductController::class, 'destroy'])->name('delete');
