<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinancemodelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app',[FinancemodelController::class,'index'])->name("hola_mundo");

