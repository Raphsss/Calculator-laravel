<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('home');

route::get('/calculadora', [CalculatorController::class, 'indexCalculator'])->name('formCalc');
route::post('/calculadora', [CalculatorController::class, 'calculate'])->name('calculate');

route::get('/media', [CalculatorController::class, 'indexAverage'])->name('formAverage');
route::post('/media', [CalculatorController::class, 'calculateAverage'])->name('calculateAverage');