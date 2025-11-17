<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\VacancyController;

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

require __DIR__.'/auth.php';

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

Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacancies.index');
Route::get('/vacancies/create', [VacancyController::class, 'create'])->name('vacancies.create');
Route::post('/vacancies', [VacancyController::class, 'store'])->name('vacancies.store');
Route::get('/vacancies/{vacancy}', [VacancyController::class, 'show'])->name('vacancies.show');
Route::get('/vacancies/{vacancy}/edit', [VacancyController::class, 'edit'])->name('vacancies.edit');
Route::put('/vacancies/{vacancy}', [VacancyController::class, 'update'])->name('vacancies.update');
Route::delete('/vacancies/{vacancy}', [VacancyController::class, 'destroy'])->name('vacancies.destroy');