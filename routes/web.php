<?php

use App\Http\Controllers\FruitsController;
use Illuminate\Support\Facades\Route;

Route::get('fruits/', [FruitsController::class, 'show']);
