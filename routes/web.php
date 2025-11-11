<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SupervisorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/interns', [InternController::class, 'index'])->name('interns.index');
Route::get('/interns/create', [InternController::class, 'create'])->name('interns.create');
Route::post('/interns', [InternController::class, 'store'])->name('interns.store');
Route::get('/interns/{intern}', [InternController::class, 'show'])->name('interns.show');
Route::get('/interns/{intern}/edit', [InternController::class, 'edit'])->name('interns.edit');
Route::put('/interns/{intern}', [InternController::class, 'update'])->name('interns.update');
Route::delete('/interns/{intern}', [InternController::class, 'destroy'])->name('interns.destroy');

Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');
Route::get('/departments/{department}', [DepartmentController::class, 'show'])->name('departments.show');
Route::get('/departments/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
Route::put('/departments/{department}', [DepartmentController::class, 'update'])->name('departments.update');
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

Route::get('/supervisors', [SupervisorController::class, 'index'])->name('supervisors.index');
Route::get('/supervisors/create', [SupervisorController::class, 'create'])->name('supervisors.create');
Route::post('/supervisors', [SupervisorController::class, 'store'])->name('supervisors.store');
Route::get('/supervisors/{supervisor}', [SupervisorController::class, 'show'])->name('supervisors.show');
Route::get('/supervisors/{supervisor}/edit', [SupervisorController::class, 'edit'])->name('supervisors.edit');
Route::put('/supervisors/{supervisor}', [SupervisorController::class, 'update'])->name('supervisors.update');
Route::delete('/supervisors/{supervisor}', [SupervisorController::class, 'destroy'])->name('supervisors.destroy');