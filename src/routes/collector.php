<?php

use Illuminate\Support\Facades\Route;


Route::get('/collector', [\Ossqo\Collector\Http\Controllers\BrandController::class, 'index']);
