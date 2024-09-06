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
use Illuminate\Database\QueryException;


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
}
