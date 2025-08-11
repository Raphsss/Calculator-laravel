<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('home');

route::get('/calculadora', [CalculatorController::class, 'index'])->name('formCalc');
route::post('/calculadora', [CalculatorController::class, 'calculate'])->name('calculate');
