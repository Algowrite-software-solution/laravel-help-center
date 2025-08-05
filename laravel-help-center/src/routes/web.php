<?php

use Algowrite\LaravelHelpCenter\Http\Controllers\LaravelHelpCenterController;
use Illuminate\Support\Facades\Route;


Route::get('/help-center', [LaravelHelpCenterController::class, 'index']);