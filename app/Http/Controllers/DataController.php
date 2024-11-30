<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\Auth;
use App\Models\EstadoFinanciero;
use App\Models\DatoMacroeconomico;
use App\Models\Patrimonio;
use App\Models\IngresoUtilidadGasto;
use App\Models\IndicadorFinanciero;
use Illuminate\Support\Facades\Log;
use App\Jobs\ExecutePythonScript;
use Illuminate\Support\Facades\DB;
use App\Models\Prediccion;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;



class DataController extends Controller
{
    // Método para mostrar la vista con los resultados financieros y las predicciones
    public function getDataForModel()
    {
         // Obtener el id_empresa del usuario autenticado
    $id_empresa = Auth::user()->id_empresa;

    // Consultar los datos de la base de datos
    $estadoFinanciero = EstadoFinanciero::where('id_empresa', $id_empresa)->get();
    $datosMacro = DatoMacroeconomico::all();
    $patrimonio = Patrimonio::where('id_empresa', $id_empresa)->get();
    $movimientos = IngresoUtilidadGasto::where('id_empresa', $id_empresa)->get();
    $indicadores = IndicadorFinanciero::where('id_empresa', $id_empresa)->get();

    // Pasar los datos a la vista
    return view('algoritm', compact('estadoFinanciero', 'patrimonio', 'movimientos', 'indicadores'));

    }

    // Método para obtener datos de la empresa y enviar el proceso a la cola para ejecutar el modelo
    public function recivedatamodel(Request $request)
    {
         

         // Obtener los datos del usuario autenticado
        $user = Auth::user();
    
        //verificamoes el id_empresa para filtrar los datos correctos de la empresa autenticada
        $id_empresa = Auth::user()->id_empresa;

        $estadoFinanciero = EstadoFinanciero::where('id_empresa', $id_empresa)->get();
        $datosMacro = DatoMacroeconomico::all();
        $patrimonio = Patrimonio::where('id_empresa', $id_empresa)->get();
        $movimientos = IngresoUtilidadGasto::where('id_empresa', $id_empresa)->get();
        $indicadores = IndicadorFinanciero::where('id_empresa', $id_empresa)->get();

        $data = [
        'estado_financiero' => $estadoFinanciero->toArray(),
        'datos_macro' => $datosMacro->toArray(),
        'patrimonio' => $patrimonio->toArray(),
        'movimientos' => $movimientos->toArray(),
        'indicadores' => $indicadores->toArray(),
        ];

         // Enviar los datos al servidor Python
    try {
      $pythonResponse = Http::post('http://127.0.0.1:5000/api/algoritmo', $data);

      // Manejar la respuesta del servidor Python
      if ($pythonResponse->successful()) {
          $resultados = $pythonResponse->json();
          #dd($resultados);

          // Verificar si la respuesta contiene las predicciones
          if (isset($resultados['predicciones']) && is_array($resultados['predicciones']) && !empty($resultados['predicciones'])) {
              return view('results', ['resultados' => $resultados]);
          }

          // Si no hay predicciones, enviar mensaje a la vista
          return view('results')->with('error', 'No se recibieron las predicciones correctamente.');
      }

      // Error en la conexión con el servidor Python
      return back()->withErrors(['error' => 'Hubo un problema al procesar los datos.']);
  } catch (\Exception $e) {
      // Manejo de excepciones en la conexión
      return back()->withErrors(['error' => 'No se pudo conectar con el servidor Python.']);
  }
     #   if (Auth::check()) {
      #      $id_empresa = Auth::user()->id_empresa;

            // Consultar los datos financieros y macroeconómicos de la empresa
        #    $estadoFinanciero = EstadoFinanciero::where('id_empresa', $id_empresa)->get();
         #   $datosMacro = DatoMacroeconomico::all();
          #  $patrimonio = Patrimonio::where('id_empresa', $id_empresa)->get();
           # $movimientos = IngresoUtilidadGasto::where('id_empresa', $id_empresa)->get();
           # $indicadores = IndicadorFinanciero::where('id_empresa', $id_empresa)->get();

            #if ($estadoFinanciero->isNotEmpty() || $datosMacro->isNotEmpty() || $patrimonio->isNotEmpty() || $movimientos->isNotEmpty() || $indicadores->isNotEmpty()) {
             #   $inputData = [
              #      'estadoFinanciero' => $estadoFinanciero,
               #     'datosMacro' => $datosMacro,
                #    'patrimonio' => $patrimonio,
                 #   'movimientos' => $movimientos,
                  #  'indicadores' => $indicadores,
            #    ];

             #   $userId = auth()->id();
             #    $fileName = 'temp_input_data_' . uniqid() . '.json';
              #   $tempFile = storage_path("app/user_data/{$userId}/" . $fileName);
               #  File::ensureDirectoryExists(storage_path("app/user_data/{$userId}"));
                #  File::put($tempFile, $jsonInput);

                // Normalizar la ruta para compatibilidad con Python
                #$normalizedTempFile = str_replace('\\', '/', $tempFile);

                // Despachar el Job a la cola para ejecutar el script Python
#                dispatch(new ExecutePythonScript($normalizedTempFile, Auth::id()));

 #               return redirect()->route('algoritm')->with('message', 'Procesando los datos. Esto puede tardar unos minutos.');
  #          } else {
   #             return response()->json(['error' => 'No data found for this company'], 404);
    #        }
     #   }

      #  return response()->json(['error' => 'Unauthorized'], 401);
    }
}
