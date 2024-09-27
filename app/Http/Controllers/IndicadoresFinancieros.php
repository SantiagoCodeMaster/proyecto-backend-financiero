<?php

namespace App\Http\Controllers;

use App\Models\EstadoFinanciero;
use Illuminate\Http\Request;

class IndicadoresFinancieros extends Controller
{
    
     // Mostrar todos los registros de estado financiero
     public function index()
     {
         // Obtener todos los registros de la tabla estado_financiero
         $estadosFinancieros = EstadoFinanciero::all();
 
         // Retornar los datos a la vista
         return view('show', compact('estadosFinancieros'));
     }
     public function razon_corriente(){
        
        // Obtén los datos para la primera lista
        $datosPrimeraLista = EstadoFinanciero::where('fecha', '2023-06-30')->get([
            'obligaciones_financieras_corrientes',
            'pasivos_por_derecho_corriente',
            'proveedores_cuentas_pagar_corriente',
            'impuestos_por_pagar_corriente',
            'pasivo_beneficios_empleados_corriente',
            'provisiones_corriente'
        ]);
     
        // Procesa los datos de la primera lista
        $lista1 = $datosPrimeraLista->map(function ($item) {
            return [
                'obligaciones_financieras_corrientes' => $item->obligaciones_financieras_corrientes,
                'pasivos_por_derecho_corriente' => $item->pasivos_por_derecho_corriente,
                'proveedores_cuentas_pagar_corriente' => $item->proveedores_cuentas_pagar_corriente,
                'impuestos_por_pagar_corriente' => $item->impuestos_por_pagar_corriente,
                'pasivo_beneficios_empleados_corriente' => $item->pasivo_beneficios_empleados_corriente,
                'provisiones_corriente' => $item->provisiones_corriente
            ];
        });
    
       // Obtén los datos para la segunda lista
       $datosSegundaLista = EstadoFinanciero::where('fecha', '2023-06-30')->get([
          'efectivo_equivalentes',
          'deudores_comerciales',
          'activos_biologicos',
          'otros_activos_corrientes',
          'inventarios'
       ]);

         // Inicializa la variable para los inventarios
         $inventarios = [];

        // Procesa los datos de la segunda lista
        $lista2 = $datosSegundaLista->map(function ($item) use (&$inventarios) {
        // Guarda el valor de inventarios en la variable separada
        $inventarios[] = $item->inventarios;

       // Retorna los demás valores excluyendo inventarios
       return [
         'efectivo_equivalentes' => $item->efectivo_equivalentes,
         'deudores_comerciales' => $item->deudores_comerciales,
         'activos_biologicos' => $item->activos_biologicos,
         'otros_activos_corrientes' => $item->otros_activos_corrientes,
          ];
        });

        print_r($lista2[0]);
        echo "prueba";
        print_r($inventarios);
    
         // Suma todos los valores de la primera lista
          $lista_suma1 = $lista1->flatten()->sum(); // Usamos el método de colección sum()

        // Suma todos los valores de la segunda lista
          $lista_suma2 = $lista2->flatten()->sum(); // Usamos el método de colección sum()

          $inventarioValor = $inventarios[0];

        //hacemos el calculo de la prueba acida
        $resultado = $lista_suma2 - $inventarioValor / $lista_suma1;
        print_r($resultado);

        }
       
}
