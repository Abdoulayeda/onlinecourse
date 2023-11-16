<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategorieController;

Route::get('/', [AdminController::class, 'index'])->name('admin.index');

Route::get('categories', [CategorieController::class, 'index'])->name('categories.index');
Route::get('categorie/create', [CategorieController::class, 'create'])->name('categorie.create');
Route::post('categorie/store', [CategorieController::class, 'store'])->name('categorie.store');

Route::delete('categorie/{id}', [CategorieController::class, 'destroy'])->name('categorie.delete');