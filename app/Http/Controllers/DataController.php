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

class DataController extends Controller
{
    // Método para mostrar la vista del algoritmo
    public function showAlgorithm()
    {
        return view('algoritm');
    }

    // Método para obtener datos de la empresa y ejecutar el modelo
    public function getDataForModel(Request $request)
    {
        // Verifica si el usuario está autenticado
        if (Auth::check()) {
            // Obtiene el id_empresa del usuario autenticado
            $id_empresa = Auth::user()->id_empresa;

            // Obtiene los datos relacionados con el id_empresa
            $estadoFinanciero = EstadoFinanciero::where('id_empresa', $id_empresa)->get();
            $datosMacro = DatoMacroeconomico::all();
            $patrimonio = Patrimonio::where('id_empresa', $id_empresa)->get();
            $movimientos = IngresoUtilidadGasto::where('id_empresa', $id_empresa)->get();
            $indicadores = IndicadorFinanciero::where('id_empresa', $id_empresa)->get();

            // Verificar si los datos existen
            if ($estadoFinanciero->isNotEmpty() || $datosMacro->isNotEmpty() || $patrimonio->isNotEmpty() || $movimientos->isNotEmpty() || $indicadores->isNotEmpty()) {
                // Prepara los datos en un formato adecuado para Python
                $inputData = [
                    'estadoFinanciero' => $estadoFinanciero,
                    'datosMacro' => $datosMacro,
                    'patrimonio' => $patrimonio,
                    'movimientos' => $movimientos,
                    'indicadores' => $indicadores,
                ];

                // Guardar los datos en un archivo temporal
                $jsonInput = json_encode($inputData);
                $tempFile = storage_path('app/temp_input_data.json');
                File::put($tempFile, $jsonInput);

                // Llamar a los modelos entrenados en Python con la ruta del archivo
                $resultados = $this->ejecutarModelosPython($tempFile);

                // Verificar si hubo un error al ejecutar los modelos
                if (isset($resultados['error'])) {
                    return response()->json(['error' => $resultados['error']], 500);
                }

                return response()->json([
                    'resultados' => $resultados['predicciones']
                ], 200);
            } else {
                return response()->json(['error' => 'No data found for this company'], 404);
            }
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

    // Método para ejecutar los modelos en Python
    protected function ejecutarModelosPython($filePath)
    {
        // Rutas a los modelos y datos
        $path_modelos_lasso = storage_path('app/modelos_lasso');
        $path_modelos_arima = storage_path('app/modelos_arima');
        $input_file = $filePath; // El archivo con los datos de entrada
        
        // Cargar la ruta del script Python desde el archivo .env
        $path_script_python = env('PYTHON_SCRIPT_PATH');
        
        // Verifica si la ruta es válida, ajustando según el entorno
        if (app()->environment('local')) {
            // Usa una ruta relativa o ajusta la ruta al entorno de desarrollo
            $path_script_python = base_path('scripts/proyecto_finance/script.py');
        } else {
            // Ajuste para entornos de producción
            $path_script_python = base_path('scripts/proyecto_finance/script.py');
        }

        // Construye el comando de ejecución del script de Python
        $command = 'python3 ' . escapeshellarg($path_script_python) . ' ' . 
                    escapeshellarg($path_modelos_lasso) . ' ' . 
                    escapeshellarg($path_modelos_arima) . ' ' . 
                    escapeshellarg($input_file);

        // Ejecutar el comando y capturar la salida y errores
        $output = shell_exec($command . ' 2>&1'); // Captura tanto la salida estándar como los errores
        
        // Log para ver el resultado
        Log::info('Output del script Python: ' . $output);

        // Verificar si la salida está vacía o si hubo un error
        if (!$output) {
            return ['error' => 'Error al ejecutar el modelo en Python'];
        }

        // Procesar el resultado de la ejecución
        $resultado = json_decode($output, true);

        // Verificar si hay error al decodificar el JSON
        if (json_last_error() !== JSON_ERROR_NONE) {
            Log::error('Error al decodificar la respuesta JSON del modelo Python: ' . json_last_error_msg());
            Log::error('Salida completa del script Python: ' . $output); // Log completo de la salida
            return ['error' => 'Error al procesar la respuesta del modelo Python'];
        }

        // Retornar los resultados decodificados
        return $resultado;
    }
}
