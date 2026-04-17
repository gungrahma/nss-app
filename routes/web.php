<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');