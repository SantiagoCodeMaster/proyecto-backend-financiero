<?php
use  App\Http\Controllers\Auth\FinancialFormController;
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
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\VerifyCsrfToken;


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
       
    Route::get('/formulario1', [FinancialFormController::class, 'showFormulario1'])->name('formulario1');
    Route::post('/formulario1', [FinancialFormController::class, 'survey1'])->name('formulario1.store'); 
   
    Route::get('/formulario2', [FinancialFormController::class, 'showFormulario2'])->name('formulario2');
    Route::post('/formulario2', [FinancialFormController::class, 'survey2'])->name('formulario2.store');

    Route::get('/formulario3', [FinancialFormController::class, 'showFormulario3'])->name('formulario3');
    Route::post('/formulario3', [FinancialFormController::class, 'survey3'])->name('formulario3.store');

    Route::get('/formulario4', [FinancialFormController::class, 'showFormulario4'])->name('formulario4');
    Route::post('/formulario4', [FinancialFormController::class, 'survey4'])->name('formulario4.store');

    Route::get('/formulario5',[FinancialFormController::class,'showFormulario5'])->name('formulario5');
     
    Route::get('/formulario_cliente',[FinancialFormController::class,'showFormulariocliente'])->name('formulario_cliente');
    Route::post('/formulario_cliente',[FinancialFormController::class,'saveClientData'])->name('formulario_cliente.store');
 
    Route::get('/algoritm', [DataController::class, 'getDataForModel'])->name('algoritm');
    Route::post('/algoritm/data', [DataController::class, 'recivedatamodel'])->name('algoritm.store');

    Route::get('/show',[FinancialFormController::class,'index'])->name('show');

}); 


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



require __DIR__.'/auth.php';