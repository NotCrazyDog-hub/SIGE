<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternController;

Route::get('/', function () {
    return view('welcome');
});
