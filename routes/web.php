<?php
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index_app');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas autenticadas
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 
   # Route::get('/formulario1', [FormController::class, 'showFormulario1'])->name('formulario1');
    #Route::post('/formulario1', [FormController::class, 'survey1'])->name('formulario1.store');
   
    #Route::get('/formulario2', [FormController::class, 'showFormulario2'])->name('formulario2');
    #Route::post('/formulario2', [FormController::class, 'survey2'])->name('formulario2.store');

    #Route::get('/formulario3', [FormController::class, 'showFormulario3'])->name('formulario3');
    #Route::post('/formulario3', [FormController::class, 'survey3'])->name('formulario3.store');

    #Route::get('/formulario4', [FormController::class, 'showFormulario4'])->name('formulario4');
    #Route::post('/formulario4', [FormController::class, 'survey4'])->name('formulario4.store');

    #Route::get('/formulario5', [FormController::class, 'showFormulario5'])->name('formulario5');
    #Route::post('/formulario5', [FormController::class, 'survey5'])->name('formulario5.store');

    #Route::get('/formulario6', [FormController::class, 'showFormulario6'])->name('formulario6');
    #Route::post('/formulario6', [FormController::class, 'survey6'])->name('formulario6.store');

    #Route::get('/formulario7', [FormController::class, 'showFormulario7'])->name('formulario7');
    #Route::post('/formulario7', [FormController::class, 'survey7'])->name('formulario7.store');

    #Route::get('/formulario8',[FormController::class,'showFormulario8'])->name('formulario8');
    
    #Route::get('/formulario_cliente',[FormController::class,'showFormulariocliente'])->name('formulario_cliente');
    #Route::post('/formulario_cliente',[FormController::class,'saveClientData'])->name('formulario_cliente.store');
}); 

Route::get('/formulario1', [FormController::class, 'showFormulario1'])->name('formulario1');
Route::post('/formulario1', [FormController::class, 'survey1'])->name('formulario1.store'); 
   
Route::get('/formulario2', [FormController::class, 'showFormulario2'])->name('formulario2');
Route::post('/formulario2', [FormController::class, 'survey2'])->name('formulario2.store');

Route::get('/formulario3', [FormController::class, 'showFormulario3'])->name('formulario3');
Route::post('/formulario3', [FormController::class, 'survey3'])->name('formulario3.store');

Route::get('/formulario4', [FormController::class, 'showFormulario4'])->name('formulario4');
Route::post('/formulario4', [FormController::class, 'survey4'])->name('formulario4.store');

Route::get('/formulario5', [FormController::class, 'showFormulario5'])->name('formulario5');
Route::post('/formulario5', [FormController::class, 'survey5'])->name('formulario5.store');

Route::get('/formulario6', [FormController::class, 'showFormulario6'])->name('formulario6');
Route::post('/formulario6', [FormController::class, 'survey6'])->name('formulario6.store');
  
Route::get('/formulario7', [FormController::class, 'showFormulario7'])->name('formulario7');
Route::post('/formulario7', [FormController::class, 'survey7'])->name('formulario7.store');

Route::get('/formulario8',[FormController::class,'showFormulario8'])->name('formulario8');
    
Route::get('/formulario_cliente',[FormController::class,'showFormulariocliente'])->name('formulario_cliente');
Route::post('/formulario_cliente',[FormController::class,'saveClientData'])->name('formulario_cliente.store');
 


