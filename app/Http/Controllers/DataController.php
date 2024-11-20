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
          // Validación básica de los datos ingresados
          $validatedData = $request->validate([
         'email' => 'required|email',
         'password' => 'required',
          ]);

          // Obtener los datos del usuario autenticado
          $user = Auth::user();

         // Verificar que el email y la contraseña coincidan con el usuario autenticado
         if ($user->email !== $validatedData['email'] || !Hash::check($validatedData['password'], $user->password)) {
            return redirect()->route('algoritm') 
            ->with('error', 'Credenciales incorrectas');
         }

    
        // Enviar los datos al servidor Python
        $pythonResponse = Http::post('http://127.0.0.1:5000/api/algoritmo', $validatedData);

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

         // Manejar la respuesta del algoritmo
        if ($pythonResponse->successful()) {
            // Obtener los datos de la respuesta de Python
            $resultados = $pythonResponse->json();
            // Asegurarse de que los resultados se están recibiendo correctamente
            dd($resultados);  // Muestra los resultados para depurar
            return view('resultados', compact('resultados'));
        } else {
           return back()->withErrors(['error' => 'Hubo un problema al procesar los datos.']);
        }

        return response()->json($data);
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
