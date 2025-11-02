<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/interns', [InternController::class, 'index'])->name('interns.index');
Route::get('/interns/create', [InternController::class, 'create'])->name('interns.create');
Route::post('/interns', [InternController::class, 'store'])->name('interns.store');
Route::get('/interns/{id}', [InternController::class, 'show'])->name('interns.show');
Route::get('/interns/{id}/edit', [InternController::class, 'edit'])->name('interns.edit');
Route::put('/interns/{id}', [InternController::class, 'update'])->name('interns.update');
Route::delete('/interns/{id}', [InternController::class, 'destroy'])->name('interns.destroy');