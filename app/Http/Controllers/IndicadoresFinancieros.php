<?php

namespace App\Http\Controllers;

use App\Models\EstadoFinanciero;
use App\Models\IngresoUtilidadGasto;
use App\Models\Patrimonio;
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
    $datosPrimeraLista = Patrimonio::where('fecha', '2023-12-31')->get([
      'capital_emitido',
      
  ]);

  // Procesa los datos de la primera lista
  $patrimonio = $datosPrimeraLista->map(function ($item) {
      return [
          $item->capital_emitido,
        
      ];
  })->flatten()->toArray(); // Convierte en array

  
  
  $datos = IngresoUtilidadGasto::where('fecha', '2023-12-12')->get([
    'dividendos',
    'utilidad_neta_periodo',
    
]);


// Procesa los datos
$datos2 = $datos->map(function ($item) {
    return [
        $item->dividendos,
        $item->utilidad_neta_periodo
    ];
    })->flatten()->toArray(); // Convierte en array





$dividendos = $datos2[0];
$utilidad_neta = $datos2[1];
$p_total = $patrimonio[0];

$resultado = $dividendos + $utilidad_neta / $p_total;
print_r($resultado);




 










         

       

        

        }
       
}
