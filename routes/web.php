<?php

use App\Http\Controllers\site\indexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/site/index', [indexController::class, 'index'])->name('site.index');