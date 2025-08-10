<?php

use App\Http\Controllers\CalcController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CalcController::class, 'index'])->name('formCalc');

Route::post('/', [CalcController::class, 'calculate'])->name('calculate');

    