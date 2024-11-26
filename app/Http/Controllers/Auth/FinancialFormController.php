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
use App\Models\Patrimonio;
use App\Models\Producto;
use Illuminate\Database\QueryException;
use App\Models\DatoMacroeconomico;

class FinancialFormController extends Controller
{
    public function index() {
        // Obtener el ID de la empresa asociada al usuario autenticado
        $idEmpresa = Auth::user()->id_empresa;

        // Consultar los datos de las tablas relacionadas con la empresa
        $estadoFinanciero = EstadoFinanciero::where('id_empresa', $idEmpresa)->get();
        $patrimonio = Patrimonio::where('id_empresa', $idEmpresa)->get();
        $movimientos = IngresoUtilidadGasto::where('id_empresa', $idEmpresa)->get();
        $indicadores = IndicadorFinanciero::where('id_empresa', $idEmpresa)->get();

        // Pasar los datos a la vista
        return view('show', compact('estadoFinanciero',  'patrimonio', 'movimientos', 'indicadores'));
    }
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
 
    public function showFormulariocliente() { 
        return view('formulario_cliente');
    }
    public function showDatos(){
        return view('datos_macro');
    } 

    // Procesar formularios
    public function survey1(Request $request) {
        $user = Auth::user(); // Obtener el usuario autenticado
        $empresaId = $user->id_empresa; // Obtener el ID de la empresa desde el modelo User
    
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
    
        // Ingresar los datos a la base de datos junto con el ID de la empresa
        EstadoFinanciero::create(array_merge($request->only([
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
            'provisiones_no_corriente',
        ]), [
            'id_empresa' => $empresaId // Agregar el ID de la empresa
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
            'provisiones_no_corriente',
        ]));
    
        // Redirigir a la página de formulario 2
        return redirect()->route('formulario2');
    } 
        
    

    public function survey2(Request $request) {
        $user = Auth::user(); // Obtener el usuario autenticado
    $empresaId = $user->id_empresa; // Obtener el ID de la empresa desde el modelo User

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
    Patrimonio::create(array_merge(
        $request->only([
            'fecha', 
            'capital_emitido', 
            'prima_emision_capital', 
            'reservas_utilidades_acumuladas',
            'otro_resultado_integral', 
            'utilidad_periodo', 
            'patrimonio_atributable_controladoras',
            'participaciones_no_controladoras'
        ]),
        ['id_empresa' => $empresaId] // Agregar el ID de la empresa
    ));

    // Guardar los datos en la sesión
    $request->session()->put('datos', $request->only([
        'fecha', 
        'capital_emitido', 
        'prima_emision_capital', 
        'reservas_utilidades_acumuladas',
        'otro_resultado_integral', 
        'utilidad_periodo', 
        'patrimonio_atributable_controladoras',
        'participaciones_no_controladoras'
    ]));

    // Redirigir a la página de formulario 3
    return redirect()->route('formulario3');
    }

    public function survey3(Request $request) {
        $user = Auth::user(); // Obtener el usuario autenticado
    $empresaId = $user->id_empresa; // Obtener el ID de la empresa desde el modelo User

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

    // Guardar los datos en la base de datos, incluyendo el ID de la empresa
    IngresoUtilidadGasto::create(array_merge(
        $validatedData,
        ['id_empresa' => $empresaId] // Agregar el ID de la empresa
    ));

    // Redirigir a la página de formulario 4
    return redirect()->route('formulario4');
       
    } 

    public function survey4(Request $request) {
        $user = Auth::user(); // Obtener el usuario autenticado
        $empresaId = $user->id_empresa; // Obtener el ID de la empresa desde el modelo User
    
        // Validar los datos del formulario
        $validatedData = $request->validate([
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
    
        // Guardar los datos en la base de datos, incluyendo el ID de la empresa
        IndicadorFinanciero::create(array_merge(
            $validatedData,
            ['id_empresa' => $empresaId] // Agregar el ID de la empresa
        ));
    
        // Redirigir a la página de formulario 5
        return redirect()->route('formulario5');
    }

    
    public function saveClientData(Request $request) {
        $user = Auth::user(); // Obtener el usuario autenticado
        $empresaId = $user->id_empresa; // Obtener el ID de la empresa desde el modelo User
    
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'cedula_nit_cliente' => 'required|string|max:20',
            'compras_mes' => 'required|numeric',
        ]);
    
        // Guardar los datos en la base de datos, incluyendo el ID de la empresa
        Cliente::create(array_merge(
            $validatedData,
            ['id_empresa' => $empresaId] // Agregar el ID de la empresa
        ));
    
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
