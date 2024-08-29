<?php

use App\Http\Controllers\FinancemodelController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index_app');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/inicio', [FinancemodelController::class,'index'])->name('inicio');
    Route::post('/formulario1',[FinancemodelController::class,'survey1'])->name('formulario1');
    Route::post('/formulario2',function(){
        return "hello wolrd";
    })->name('formulario2');

});

require __DIR__.'/auth.php';
