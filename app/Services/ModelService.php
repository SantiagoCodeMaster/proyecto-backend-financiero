<?php

namespace App\Services;

class ModelService
{
    // Ejecutar el modelo Lasso
    public function runLassoModel($data)
    {
        // Guardar los datos en un archivo JSON
        file_put_contents(storage_path('app/input_data.json'), json_encode($data));

        // Ejecutar el script Lasso
        $output = shell_exec('python C:\xampp\htdocs\example-app\app\Services\modelos_lasso');

        // Verificar si hubo algún error
        if (!$output) {
            return null;
        }

        // Devolver los resultados del modelo Lasso
        return $output;
    }

    // Ejecutar el modelo ARIMA
    public function runArimaModel($lassoData)
    {
        // Guardar los datos seleccionados por Lasso
        file_put_contents(storage_path('app/selected_features.json'), json_encode($lassoData));

        // Ejecutar el script ARIMA
        $output = shell_exec('python C:\xampp\htdocs\example-app\app\Services\modelos_arima');

        // Verificar si hubo algún error
        if (!$output) {
            return null;
        }

        // Devolver los resultados del modelo ARIMA
        return $output;
    }

    // Ejecutar el modelo RNN
    public function runRnnModel($arimaOutput)
    {
        // Guardar los resultados del modelo ARIMA
        file_put_contents(storage_path('app/arima_output.json'), json_encode($arimaOutput));

        // Ejecutar el script RNN
        $output = shell_exec('python C:\xampp\htdocs\example-app\app\Services\rnn_model.h5');

        // Verificar si hubo algún error
        if (!$output) {
            return null;
        }

        // Devolver el resultado final
        return $output;
    }
}
