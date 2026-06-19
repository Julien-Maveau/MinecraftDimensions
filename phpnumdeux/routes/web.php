<?php

use App\Http\Controllers\DimensionController;
use Illuminate\Support\Facades\Route;

Route::get('/Home', function () {
    return view('index');
});

Route::get('/Home' , [DimensionController::class, 'index']);

Route::get('/views/{id}', [DimensionController::class,'show']);

Route::get('/index', [DimensionController::class,'index'])->name('dimension.index');

