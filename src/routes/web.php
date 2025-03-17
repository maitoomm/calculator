<?php

use Illuminate\Support\Facades\Route;
use MyVendor\Calculator\Controllers\CalculatorController;

Route::get('calculator/add/{a}/{b}', [CalculatorController::class, 'add']);
Route::get('calculator/subtract/{a}/{b}', [CalculatorController::class, 'subtract']);
Route::get('calculator/multiply/{a}/{b}', [CalculatorController::class, 'multiply']);
Route::get('calculator/divide/{a}/{b}', [CalculatorController::class, 'divide']);
