<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\EstadoFinanciero;
use App\Models\IndicadorFinanciero;
use App\Models\IngresoUtilidadGasto;
use App\Models\Movimiento;
use App\Models\Patrimonio;
use App\Models\Producto;
use Illuminate\Http\Request;

class FormController extends Controller
{
    // Mostrar formularios
    public function showFormulario1() {
        return view('formulario1');
    }

    public function showFormulario2() {
        return view('formulario2');
    }

    public function showFormulario3() {
        return view('formulario3');
    }

    public function showFormulario4() {
        return view('formulario4');
    }

    public function showFormulario5() {
        return view('formulario5');
    }

    public function showFormulario6() {
        return view('formulario6');
    }

    public function showFormulario7() {
        return view('formulario7');
    }

    public function showFormulario8() {
        return view('formulario8');
    }

    public function showFormulariocliente() {
        return view('formulario_cliente');
    }

    // Procesar formularios
    public function survey1(Request $request) {
        // Validar los datos del request
        $request->validate([
            'nombre_empresa' => 'required|string|max:255',
            'nit' => 'required|string|max:20',
            'rublo' => 'required|string|max:255',
        ]);

        // Ingresar los datos a la base de datos
        Empresa::create([
            'nombre_empresa' => $request->input('nombre_empresa'),
            'nit' => $request->input('nit'),
            'rublo' => $request->input('rublo'),
        ]);

        // Guardar los datos en la sesión
        $request->session()->put('datos', $request->only(['nombre_empresa', 'nit', 'rublo']));

        // Redirigir a la página de formulario 2
        return redirect()->route('formulario2');
    }

    public function survey2(Request $request) {
        // Validar los datos del request
        $request->validate([
            'fecha' => 'required|date',
            'efectivo_equivalentes' => 'required|numeric',
            'deudores_comerciales' => 'required|numeric',
            'inventarios' => 'required|numeric',
            'activos_biologicos' => 'required|numeric',
            'otros_activos_corrientes' => 'required|numeric',
            'activos_no_corrientes_venta' => 'required|numeric',
            'deudores_comerciales_no_corriente' => 'required|numeric',
            'inversiones_asociadas_negocios' => 'required|numeric',
            'propiedades_planta_equipo' => 'required|numeric',
            'activos_por_derechos' => 'required|numeric',
            'propiedades_inversion' => 'required|numeric',
            'plusvalia' => 'required|numeric',
            'otros_activos_intangibles' => 'required|numeric',
            'activo_por_impuesto_diferido' => 'required|numeric',
            'otros_activos_no_corrientes' => 'required|numeric',
            'obligaciones_financieras_corrientes' => 'required|numeric',
            'pasivos_por_derecho_corriente' => 'required|numeric',
            'proveedores_cuentas_pagar_corriente' => 'required|numeric',
            'impuestos_por_pagar_corriente' => 'required|numeric',
            'pasivo_beneficios_empleados_corriente' => 'required|numeric',
            'provisiones_corriente' => 'required|numeric',
            'obligaciones_financieras_no_corriente' => 'required|numeric',
            'pasivos_por_derecho_no_corriente' => 'required|numeric',
            'proveedores_cuentas_pagar_no_corriente' => 'required|numeric',
            'pasivo_beneficios_empleados_no_corriente' => 'required|numeric',
            'pasivo_por_impuesto_diferido' => 'required|numeric',
            'provisiones_no_corriente' => 'required|numeric',
        ]);

        // Ingresar los datos a la base de datos
        EstadoFinanciero::create($request->only([
            'fecha', 'efectivo_equivalentes', 'deudores_comerciales', 'inventarios',
            'activos_biologicos', 'otros_activos_corrientes', 'activos_no_corrientes_venta',
            'deudores_comerciales_no_corriente', 'inversiones_asociadas_negocios',
            'propiedades_planta_equipo', 'activos_por_derechos', 'propiedades_inversion',
            'plusvalia', 'otros_activos_intangibles', 'activo_por_impuesto_diferido',
            'otros_activos_no_corrientes', 'obligaciones_financieras_corrientes',
            'pasivos_por_derecho_corriente', 'proveedores_cuentas_pagar_corriente',
            'impuestos_por_pagar_corriente', 'pasivo_beneficios_empleados_corriente',
            'provisiones_corriente', 'obligaciones_financieras_no_corriente',
            'pasivos_por_derecho_no_corriente', 'proveedores_cuentas_pagar_no_corriente',
            'pasivo_beneficios_empleados_no_corriente', 'pasivo_por_impuesto_diferido',
            'provisiones_no_corriente'
        ]));

        // Guardar los datos en la sesión
        $request->session()->put('datos', $request->only([
            'fecha', 'efectivo_equivalentes', 'deudores_comerciales', 'inventarios',
            'activos_biologicos', 'otros_activos_corrientes', 'activos_no_corrientes_venta',
            'deudores_comerciales_no_corriente', 'inversiones_asociadas_negocios',
            'propiedades_planta_equipo', 'activos_por_derechos', 'propiedades_inversion',
            'plusvalia', 'otros_activos_intangibles', 'activo_por_impuesto_diferido',
            'otros_activos_no_corrientes', 'obligaciones_financieras_corrientes',
            'pasivos_por_derecho_corriente', 'proveedores_cuentas_pagar_corriente',
            'impuestos_por_pagar_corriente', 'pasivo_beneficios_empleados_corriente',
            'provisiones_corriente', 'obligaciones_financieras_no_corriente',
            'pasivos_por_derecho_no_corriente', 'proveedores_cuentas_pagar_no_corriente',
            'pasivo_beneficios_empleados_no_corriente', 'pasivo_por_impuesto_diferido',
            'provisiones_no_corriente'
        ]));

        // Redirigir a la página de formulario 3
        return redirect()->route('formulario3');
    }

    public function survey3(Request $request) {
        // Validar los datos del request
        $request->validate([
            'fecha' => 'required|date',
            'capital_emitido' => 'required|numeric',
            'prima_emision_capital' => 'required|numeric',
            'reservas_utilidades_acumuladas' => 'required|numeric',
            'otro_resultado_integral' => 'required|numeric',
            'utilidad_periodo' => 'required|numeric',
            'patrimonio_atributable_controladoras' => 'required|numeric',
            'participaciones_no_controladoras' => 'required|numeric',
        ]);

        // Ingresar los datos a la base de datos
        EstadoFinanciero::create($request->only([
            'fecha', 'capital_emitido', 'prima_emision_capital', 'reservas_utilidades_acumuladas',
            'otro_resultado_integral', 'utilidad_periodo', 'patrimonio_atributable_controladoras',
            'participaciones_no_controladoras'
        ]));

        // Guardar los datos en la sesión
        $request->session()->put('datos', $request->only([
            'fecha', 'capital_emitido', 'prima_emision_capital', 'reservas_utilidades_acumuladas',
            'otro_resultado_integral', 'utilidad_periodo', 'patrimonio_atributable_controladoras',
            'participaciones_no_controladoras'
        ]));

        // Redirigir a la página de formulario 4
        return redirect()->route('formulario4');
    }

    public function survey4(Request $request) {
        // Validar los datos del request
        // Validar los datos del request
    $request->validate([
        'fecha' => 'required|date',
        'costos_venta' => 'required|numeric',
        'utilidad_bruta' => 'required|numeric',
        'gastos_administracion' => 'required|numeric',
        'gastos_venta' => 'required|numeric',
        'gastos_produccion' => 'required|numeric',
        'diferencia_cambio_activos_pasivos' => 'required|numeric',
        'otros_ingresos_netos' => 'required|numeric',
        'utilidad_operativa' => 'required|numeric',
        'ingresos_financieros' => 'required|numeric',
        'gastos_financieros' => 'required|numeric',
        'dividendos' => 'required|numeric',
        'utilidad_antes_impuestos' => 'required|numeric',
        'impuestos' => 'required|numeric',
        'utilidad_periodo' => 'required|numeric',
        'utilidad_antes_impuestos_continua' => 'required|numeric',
        'impuestos_utilidad_continua' => 'required|numeric',
        'utilidad_periodo_continua' => 'required|numeric',
    ]);

    // Intentar insertar los datos en la base de datos
    try {
        IngresoUtilidadGasto::create([
            'fecha' => $request->get('fecha'),
            'costos_venta' => $request->get('costos_venta'),
            'utilidad_bruta' => $request->get('utilidad_bruta'),
            'gastos_administracion' => $request->get('gastos_administracion'),
            'gastos_venta' => $request->get('gastos_venta'),
            'gastos_produccion' => $request->get('gastos_produccion'),
            'diferencia_cambio_activos_pasivos' => $request->get('diferencia_cambio_activos_pasivos'),
            'otros_ingresos_netos' => $request->get('otros_ingresos_netos'),
            'utilidad_operativa' => $request->get('utilidad_operativa'),
            'ingresos_financieros' => $request->get('ingresos_financieros'),
            'gastos_financieros' => $request->get('gastos_financieros'),
            'dividendos' => $request->get('dividendos'),
            'utilidad_antes_impuestos' => $request->get('utilidad_antes_impuestos'),
            'impuestos' => $request->get('impuestos'),
            'utilidad_periodo' => $request->get('utilidad_periodo'),
            'utilidad_antes_impuestos_continua' => $request->get('utilidad_antes_impuestos_continua'),
            'impuestos_utilidad_continua' => $request->get('impuestos_utilidad_continua'),
            'utilidad_periodo_continua' => $request->get('utilidad_periodo_continua'),
        ]);

        // Si la inserción fue exitosa
        dd('Datos insertados correctamente');

    } catch (\Exception $e) {
        // Si hubo un error en la inserción, mostrar el mensaje de error
        dd('Error al insertar datos: ' . $e->getMessage());
    }

    // Guardar los datos en la sesión
    $request->session()->put('datos', $request->only([
        'fecha', 'costos_venta', 'utilidad_bruta', 'gastos_administracion',
        'gastos_venta', 'gastos_produccion', 'diferencia_cambio_activos_pasivos',
        'otros_ingresos_netos', 'utilidad_operativa', 'ingresos_financieros',
        'gastos_financieros', 'dividendos', 'utilidad_antes_impuestos',
        'impuestos', 'utilidad_periodo', 'utilidad_antes_impuestos_continua',
        'impuestos_utilidad_continua', 'utilidad_periodo_continua'
    ]));
        // Redirigir a la página de formulario 5
        return redirect()->route('formulario5');
    }

    public function survey5(Request $request) {
        // Validar los datos del request
        $request->validate([
            'fecha' => 'required|date',
            'ventas' => 'required|numeric',
            'gastos' => 'required|numeric',
            'utilidad' => 'required|numeric',
            'utilidad_neta' => 'required|numeric',
        ]);

        // Ingresar los datos a la base de datos
        Producto::create($request->only([
            'fecha', 'ventas', 'gastos', 'utilidad', 'utilidad_neta'
        ]));

        // Guardar los datos en la sesión
        $request->session()->put('datos', $request->only([
            'fecha', 'ventas', 'gastos', 'utilidad', 'utilidad_neta'
        ]));

        // Redirigir a la página de formulario 6
        return redirect()->route('formulario6');
    }

    public function survey6(Request $request) {
        // Validar los datos del request
        $request->validate([
            'fecha' => 'required|date',
            'nombre' => 'required|string|max:255',
            'cedula' => 'required|string|max:20',
            'compras' => 'required|numeric',
        ]);

        // Ingresar los datos a la base de datos
        Cliente::create($request->only([
            'fecha', 'nombre', 'cedula', 'compras'
        ]));

        // Guardar los datos en la sesión
        $request->session()->put('datos', $request->only([
            'fecha', 'nombre', 'cedula', 'compras'
        ]));

        // Redirigir a la página de formulario 7
        return redirect()->route('formulario7');
    }

    public function survey7(Request $request) {
        // Validar los datos del request
        $request->validate([
            'fecha' => 'required|date',
            'codigo_producto' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'cantidad' => 'required|numeric',
            'precio' => 'required|numeric',
        ]);

        // Ingresar los datos a la base de datos
        Movimiento::create($request->only([
            'fecha', 'codigo_producto', 'descripcion', 'cantidad', 'precio'
        ]));

        // Guardar los datos en la sesión
        $request->session()->put('datos', $request->only([
            'fecha', 'codigo_producto', 'descripcion', 'cantidad', 'precio'
        ]));

        // Redirigir a la página de formulario 8
        return redirect()->route('formulario8');
    }

    

    public function saveClientData(Request $request) {
        // Validar los datos del request
        $request->validate([
            'nombre' => 'required|string|max:255',
            'cedula' => 'required|string|max:20',
            'compras' => 'required|numeric',
        ]);

        // Ingresar los datos a la base de datos
        Cliente::create($request->only([
            'nombre', 'cedula', 'compras'
        ]));

        // Mostrar un mensaje emergente de confirmación
        return redirect()->route('dashboard')->with('status', 'Datos del cliente guardados exitosamente!');
    }
}



<?php
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\EstadoFinanciero;
use Illuminate\Support\Facades\DB;

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
 



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php'; 


<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\EstadoFinanciero;
use App\Models\IndicadorFinanciero;
use App\Models\IngresoUtilidadGasto;
use App\Models\Movimiento;
use App\Models\Patrimonio;
use App\Models\Producto;
use Illuminate\Database\QueryException;
use App\Models\DatoMacroeconomico;

class FormController extends Controller
{
    // Mostrar formularios
    public function showFormulario1() {
        return view('formulario1');
    }

    public function showFormulario2() {
        return view('formulario2');
    }

    public function showFormulario3() {
        return view('formulario3');
    }
 
    public function showFormulario4() {
        return view('formulario4');
    }

    public function showFormulario5() {
        return view('formulario5'); 
    }

    public function showFormulario6() {
        return view('formulario6');
    }
   
    public function showFormulario7(){
        return view('formulario7');
    } 

    public function showFormulario8() {
        return view('formulario8');
    }
 
    public function showFormulariocliente() {
        return view('formulario_cliente');
    }
    public function showDatos(){
        return view('datos_macro');
    }

    // Procesar formularios
    public function survey1(Request $request) {
        // Validar los datos del request
        $request->validate([ 
            'nombre_empresa' => 'required|string|max:255',
            'nit' => 'required|string|max:20',
            'contrseña' => 'required|string|max:255',
        ]);

        // Ingresar los datos a la base de datos
        Empresa::create([
            'nombre_empresa' => $request->input('nombre_empresa'),
            'nit' => $request->input('nit'),
            'contraseña' => $request->input('contraseña'),
        ]);

        // Guardar los datos en la sesión
        $request->session()->put('datos', $request->only(['nombre_empresa', 'nit', 'rublo','contraseña']));

        // Redirigir a la página de formulario 2
        return redirect()->route('formulario2');
    }

    public function survey2(Request $request) {
     // Validar los datos del request
     $request->validate([
        'fecha' => 'required|date',
        'efectivo_equivalentes' => 'nullable|numeric',
        'deudores_comerciales' => 'nullable|numeric',
        'inventarios' => 'nullable|numeric',
        'activos_biologicos' => 'nullable|numeric',
        'otros_activos_corrientes' => 'nullable|numeric',
        'activos_no_corrientes_venta' => 'nullable|numeric',
        'deudores_comerciales_no_corriente' => 'nullable|numeric',
        'inversiones_asociadas_negocios' => 'nullable|numeric',
        'propiedades_planta_equipo' => 'nullable|numeric',
        'activos_por_derechos' => 'nullable|numeric',
        'propiedades_inversion' => 'nullable|numeric',
        'plusvalia' => 'nullable|numeric',
        'otros_activos_intangibles' => 'nullable|numeric',
        'activo_por_impuesto_diferido' => 'nullable|numeric',
        'otros_activos_no_corrientes' => 'nullable|numeric',
        'obligaciones_financieras_corrientes' => 'nullable|numeric',
        'pasivos_por_derecho_corriente' => 'nullable|numeric',
        'proveedores_cuentas_pagar_corriente' => 'nullable|numeric',
        'impuestos_por_pagar_corriente' => 'nullable|numeric',
        'pasivo_beneficios_empleados_corriente' => 'nullable|numeric',
        'provisiones_corriente' => 'nullable|numeric',
        'obligaciones_financieras_no_corriente' => 'nullable|numeric',
        'pasivos_por_derecho_no_corriente' => 'nullable|numeric',
        'proveedores_cuentas_pagar_no_corriente' => 'nullable|numeric',
        'pasivo_beneficios_empleados_no_corriente' => 'nullable|numeric',
        'pasivo_por_impuesto_diferido' => 'nullable|numeric',
        'provisiones_no_corriente' => 'nullable|numeric',
    ]);

    // Ingresar los datos a la base de datos
    EstadoFinanciero::create($request->only([
        'fecha',
        'efectivo_equivalentes',
        'deudores_comerciales',
        'inventarios',
        'activos_biologicos',
        'otros_activos_corrientes',
        'activos_no_corrientes_venta',
        'deudores_comerciales_no_corriente',
        'inversiones_asociadas_negocios',
        'propiedades_planta_equipo',
        'activos_por_derechos',
        'propiedades_inversion',
        'plusvalia',
        'otros_activos_intangibles',
        'activo_por_impuesto_diferido',
        'otros_activos_no_corrientes',
        'obligaciones_financieras_corrientes',
        'pasivos_por_derecho_corriente',
        'proveedores_cuentas_pagar_corriente',
        'impuestos_por_pagar_corriente',
        'pasivo_beneficios_empleados_corriente',
        'provisiones_corriente',
        'obligaciones_financieras_no_corriente',
        'pasivos_por_derecho_no_corriente',
        'proveedores_cuentas_pagar_no_corriente',
        'pasivo_beneficios_empleados_no_corriente',
        'pasivo_por_impuesto_diferido',
        'provisiones_no_corriente'
    ]));

    // Guardar los datos en la sesión
    $request->session()->put('estado_financiero', $request->only([
        'fecha',
        'efectivo_equivalentes',
        'deudores_comerciales',  
        'inventarios',
        'activos_biologicos',
        'otros_activos_corrientes',
        'activos_no_corrientes_venta',
        'deudores_comerciales_no_corriente',
        'inversiones_asociadas_negocios',
        'propiedades_planta_equipo',
        'activos_por_derechos',
        'propiedades_inversion',
        'plusvalia',
        'otros_activos_intangibles',
        'activo_por_impuesto_diferido',
        'otros_activos_no_corrientes',
        'obligaciones_financieras_corrientes',
        'pasivos_por_derecho_corriente',
        'proveedores_cuentas_pagar_corriente',
        'impuestos_por_pagar_corriente',
        'pasivo_beneficios_empleados_corriente',
        'provisiones_corriente',
        'obligaciones_financieras_no_corriente',
        'pasivos_por_derecho_no_corriente',
        'proveedores_cuentas_pagar_no_corriente',
        'pasivo_beneficios_empleados_no_corriente',
        'pasivo_por_impuesto_diferido',
        'provisiones_no_corriente'
    ]));


    // Redirigir a la página de formulario 3
    return redirect()->route('formulario3');
    } 

    public function survey3(Request $request) {
        // Validar los datos del request
        $request->validate([
            'fecha' => 'required|date',
            'capital_emitido' => 'required|numeric',
            'prima_emision_capital' => 'required|numeric',
            'reservas_utilidades_acumuladas' => 'required|numeric',
            'otro_resultado_integral' => 'required|numeric',
            'utilidad_periodo' => 'required|numeric',
            'patrimonio_atributable_controladoras' => 'required|numeric',
            'participaciones_no_controladoras' => 'required|numeric',
        ]); 

        // Ingresar los datos a la base de datos
        Patrimonio::create($request->only([
            'fecha', 'capital_emitido', 'prima_emision_capital', 'reservas_utilidades_acumuladas',
            'otro_resultado_integral', 'utilidad_periodo', 'patrimonio_atributable_controladoras',
            'participaciones_no_controladoras'
        ]));
 
        // Guardar los datos en la sesión
        $request->session()->put('datos', $request->only([
            'fecha', 'capital_emitido', 'prima_emision_capital', 'reservas_utilidades_acumuladas',
            'otro_resultado_integral', 'utilidad_periodo', 'patrimonio_atributable_controladoras',
            'participaciones_no_controladoras'
        ]));

        // Redirigir a la página de formulario 4
        return redirect()->route('formulario4');
    }

    public function survey4(Request $request) {
         // Validar los datos del formulario
        $validatedData = $request->validate([
            'fecha' => 'required|date',
            'costos_venta' => 'required|numeric',
            'utilidad_bruta' => 'required|numeric',
            'gastos_administracion' => 'required|numeric',
            'gastos_venta' => 'required|numeric',
            'gastos_produccion' => 'required|numeric',
            'diferencia_cambio_activos_pasivos' => 'required|numeric',
            'otros_ingresos_netos' => 'required|numeric',
            'utilidad_operativa' => 'required|numeric',
            'ingresos_financieros' => 'required|numeric',
            'gastos_financieros' => 'required|numeric',
            'dividendos' => 'required|numeric',
            'diferencia_cambio_activos_pasivos_no_operativos' => 'required|numeric',
            'participacion_asociadas_negocios' => 'required|numeric',
            'utilidad_antes_impuestos' => 'required|numeric',
            'impuesto_renta_corriente' => 'required|numeric',
            'impuesto_renta_diferido' => 'required|numeric',
            'utilidad_periodo_operaciones_continuadas' => 'required|numeric',
            'operaciones_discontinuadas' => 'required|numeric',
            'utilidad_neta_periodo' => 'required|numeric'
        ]);

        // Guardar los datos directamente usando el método create()
        IngresoUtilidadGasto::create($validatedData);
        // Redirigir a la página de formulario 5
        return redirect()->route('formulario5');
    }

    public function survey5(Request $request) {
        // Validar los datos del request
    $request->validate([
        'fecha' => 'required|date',
        'ingresos_totales' => 'required|numeric',
        'ventas_por_producto_servicio' => 'required|numeric',
        'costos_ventas' => 'required|numeric',
        'gastos_fijos_variables' => 'required|numeric',
        'ganancias_perdidas_netas' => 'required|numeric',
        'unidades_producidas_servicios_prestados' => 'required|numeric',
        'porcentaje_utilizacion_capacidad' => 'required|numeric',
        'costos_unitarios' => 'required|numeric',
        'volumen_venta' => 'required|numeric',
    ]);

    // Ingresar los datos a la base de datos
    Movimiento::create($request->only([
        'fecha', 'ingresos_totales', 'ventas_por_producto_servicio', 
        'costos_ventas', 'gastos_fijos_variables', 'ganancias_perdidas_netas',
        'unidades_producidas_servicios_prestados', 'porcentaje_utilizacion_capacidad',
        'costos_unitarios', 'volumen_venta'
    ]));

    // Guardar los datos en la sesión
    $request->session()->put('datos', $request->only([
        'fecha', 'ingresos_totales', 'ventas_por_producto_servicio', 
        'costos_ventas', 'gastos_fijos_variables', 'ganancias_perdidas_netas',
        'unidades_producidas_servicios_prestados', 'porcentaje_utilizacion_capacidad',
        'costos_unitarios', 'volumen_venta'
    ]));


        // Redirigir a la página de formulario 6
        return redirect()->route('formulario6');
    }

    public function survey6(Request $request) {
        // Validar los datos del request
        $request->validate([
            'fecha' => 'required|date',
            'nombre_producto' => 'required|string|max:255',
            'precio_producto' => 'required|string|max:255',
            'costos_produccion' => 'required|numeric',
        ]);

        // Ingresar los datos a la base de datos
        Producto::create($request->only([
            'fecha','nombre_producto','precio_producto','costos_produccion'
        ]));

        // Guardar los datos en la sesión
        $request->session()->put('datos', $request->only([
            'fecha', 'nombre_producto','precio_producto','costos_produccion'
        ]));
        
        // Redirigir a la página de formulario 7
        return redirect()->route('formulario7');
    }

    public function survey7(Request $request) {
       // Validar los datos del request
       $request->validate([
        'fecha' => 'required|date',
        'razon_corriente' => 'required|numeric',
        'kwn' => 'required|numeric',
        'prueba_acida' => 'required|numeric',
        'rotacion_ctas_x_cobrar' => 'required|numeric',
        'rotacion_inventarios' => 'required|numeric',
        'ciclo_operacion' => 'required|numeric',
        'rotacion_proveedores' => 'required|numeric',
        'ciclo_caja' => 'required|numeric',
        'rotacion_activos' => 'required|numeric',
        'rentabilidad_operativa' => 'required|numeric',
        'roi' => 'required|numeric',
        'rentabilidad_patrimonio' => 'required|numeric',
        'margen_utilidad_bruta' => 'required|numeric',
        'margen_utilidad_operacional' => 'required|numeric',
        'margen_utilidad_antes_impuestos' => 'required|numeric',
        'margen_utilidad_neta' => 'required|numeric',
        'nivel_endeudamiento' => 'required|numeric',
        'nivel_endeudamiento_corto_plazo' => 'required|numeric',
        'nivel_endeudamiento_largo_plazo' => 'required|numeric',
        'nivel_apalancamiento' => 'required|numeric',
        'cobertura_intereses' => 'required|numeric',
        'cobertura_deuda' => 'required|numeric',
        'costo_pasivo_total' => 'required|numeric',
        'costo_deuda_financiera' => 'required|numeric',
        'costo_patrimonio' => 'required|numeric',
    ]);

    // Ingresar los datos a la base de datos
    IndicadorFinanciero::create($request->only([
        'fecha',
        'razon_corriente',
        'kwn',
        'prueba_acida',
        'rotacion_ctas_x_cobrar',
        'rotacion_inventarios',
        'ciclo_operacion',
        'rotacion_proveedores',
        'ciclo_caja',
        'rotacion_activos',
        'rentabilidad_operativa',
        'roi',
        'rentabilidad_patrimonio',
        'margen_utilidad_bruta',
        'margen_utilidad_operacional',
        'margen_utilidad_antes_impuestos',
        'margen_utilidad_neta',
        'nivel_endeudamiento',
        'nivel_endeudamiento_corto_plazo',
        'nivel_endeudamiento_largo_plazo',
        'nivel_apalancamiento',
        'cobertura_intereses',
        'cobertura_deuda',
        'costo_pasivo_total',
        'costo_deuda_financiera',
        'costo_patrimonio',
    ]));

    // Guardar los datos en la sesión (opcional, si es necesario)
    $request->session()->put('datos', $request->only([
        'fecha',
        'razon_corriente',
        'kwn',
        'prueba_acida',
        'rotacion_ctas_x_cobrar',
        'rotacion_inventarios',
        'ciclo_operacion',
        'rotacion_proveedores',
        'ciclo_caja',
        'rotacion_activos',
        'rentabilidad_operativa',
        'roi',
        'rentabilidad_patrimonio',
        'margen_utilidad_bruta',
        'margen_utilidad_operacional',
        'margen_utilidad_antes_impuestos',
        'margen_utilidad_neta',
        'nivel_endeudamiento',
        'nivel_endeudamiento_corto_plazo',
        'nivel_endeudamiento_largo_plazo',
        'nivel_apalancamiento',
        'cobertura_intereses',
        'cobertura_deuda',
        'costo_pasivo_total',
        'costo_deuda_financiera',
        'costo_patrimonio',
    ]));
        // Redirigir a la página de formulario 8
        return redirect()->route('formulario8');
    }

    
    public function saveClientData(Request $request) {
        // Validar los datos del request
        $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'cedula_nit_cliente' => 'required|string|max:20',
            'compras_mes' => 'required|numeric',
        ]); 

        // Ingresar los datos a la base de datos
        Cliente::create($request->only([
            'nombre_cliente','cedula_nit_cliente' , 'compras_mes'
        ]));

        // Mostrar un mensaje emergente de confirmación
        return redirect()->route('dashboard')->with('status', 'Datos del cliente guardados exitosamente!');
    }

    public function datosMacro(Request $request){
         // Validar los datos del request
    $request->validate([
        'fecha' => 'required|date',
        'pib' => 'required|numeric',
        'inflacion' => 'required|numeric',
        'tasa_interes' => 'required|numeric',
        'tasa_desempleo' => 'required|numeric',
    ]);

    // Ingresar los datos a la base de datos
    DatoMacroeconomico::create($request->only([
        'fecha','pib', 'inflacion', 'tasa_interes', 'tasa_desempleo'
    ]));

    // Mostrar un mensaje emergente de confirmación
    return redirect()->route('dashboard');
   }

}
