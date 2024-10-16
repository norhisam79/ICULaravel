<?php

use App\Http\Controllers\FeedController;
use Illuminate\Support\Facades\Route;


Route::get('/feeds', [FeedController::class, 'index'])->name('feeds');

Route::post('/feed/create', [FeedController::class, 'create'])->name('feeds.create');

Route::put('/feed/update/{feed}', [FeedController::class, 'update'])->name('feeds.update');

Route::get('/feed/show/{feed}', [FeedController::class, 'show'])->name('feeds.show');


