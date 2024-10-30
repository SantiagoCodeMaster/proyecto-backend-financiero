<?php
use App\Http\Controllers\FormController;
use App\Http\Controllers\IndicadoresFinancieros;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\EstadoFinanciero;
use App\Models\IndicadorFinanciero;
use Illuminate\Support\Facades\DB;
use App\Models\DatoMacroeconomico;
use App\Models\Movimiento;
use App\Models\Patrimonio;
use App\Models\IngresoUtilidadGasto;


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

    Route::get('/algorit',function(){
        return view('algorit');
    });
 
}); 

Route::get('/show',[IndicadoresFinancieros::class,'index'])->name('show');
Route::get('razon',[IndicadoresFinancieros::class,'razon_corriente'])->name('razon_corriente');
 

Route::get('/estado-financiero', function () {
    // Obtiene todos los datos de la tabla estado_financiero
    $estadoFinanciero = EstadoFinanciero::all();
    
    // Retorna los datos en formato JSON
    return response()->json($estadoFinanciero);
});

Route::get('/data_m', function () {
    // Obtiene todos los datos de la tabla estado_financiero
    $datos_macro = DatoMacroeconomico::all();
    
    // Retorna los datos en formato JSON
    return response()->json($datos_macro);
});

Route::get('/patrimonio',function(){
    // Obtiene todos los datos de la tabla estado_financiero
    $patrimonio = Patrimonio::all();
    
    // Retorna los datos en formato JSON
    return response()->json($patrimonio);
 
});

Route::get('/movimientos',function(){
    $movimientos = IngresoUtilidadGasto::all();
    
    // Retorna los datos en formato JSON
    return response()->json($movimientos);

});

Route::get('/indicadores',function(){
    $indicadores = IndicadorFinanciero::all();

    //reornar los datos en formato JSON 
    return response()->json($indicadores);
});

Route::get('/datos_macro',[FormController::class,'showDatos'])->name('datos_macro');
Route::post('/datos_macro',[FormController::class,'datosMacro'])->name('datos_macro.store');

require __DIR__.'/auth.php';