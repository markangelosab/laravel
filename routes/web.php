<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;

// Default welcome route (optional)
Route::get('/', function () {
    return view('welcome');
});

// Resource route for ExpenseController
Route::resource('expenses', ExpenseController::class);
