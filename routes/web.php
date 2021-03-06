<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/index', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/services', [PagesController::class, 'services']);
