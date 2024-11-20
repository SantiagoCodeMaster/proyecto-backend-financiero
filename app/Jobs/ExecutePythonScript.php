<?php
namespace App\Jobs;

use App\Models\Prediccion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\DB;


class ExecutePythonScript implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $tempFile;
    protected $userId;

    public function __construct($tempFile, $userId)
    {
        $this->tempFile = $tempFile;
        $this->userId = $userId;
    }

    public function handle()
    {
        // Ejecutar el script Python
        $process = new Process(['python', 'C:\Users\USUARIO\Desktop\python\proyecto_finance\main.py', $this->tempFile]);
        $process->run();

        if (!file_exists($this->tempFile)) {
            Log::error("El archivo temporal no existe: " . $this->tempFile);
            throw new \Exception("El archivo temporal no existe");
        }
        

        // Verificar si hubo algún error
        if (!$process->isSuccessful()) {
            Log::error('Error ejecutando el script Python: ' . $process->getErrorOutput());
            throw new ProcessFailedException($process);
        }

        // Obtener los resultados del script (puedes adaptarlo según el formato de salida)
        $results = json_decode($process->getOutput(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            Log::error('Error decodificando la salida JSON del script Python: ' . json_last_error_msg());
             throw new \Exception("Error al procesar la salida JSON");
        }else{
            // Guardar los resultados en la base de datos
            $this->saveResults($results);
        }


        
    }

    private function saveResults($results)
    {

       DB::beginTransaction();

       try {
          foreach ($results as $result) {
          // Validación de datos antes de crear
        if (!isset($result['efectivo_equivalentes']) || !isset($result['deudores_comerciales'])) {
            Log::error('Faltan campos en el resultado: ' . json_encode($result));
            continue;  // O lanzar una excepción si es crítico
        }

        // Crear el registro en la base de datos
        Prediccion::create([
            'user_id' => $this->userId,
            'efectivo_equivalentes' => $result['efectivo_equivalentes'] ?? null,
            'deudores_comerciales' => $result['deudores_comerciales'] ?? null,
            'inventarios' => $result['inventarios'] ?? null,
            'activos_biologicos' => $result['activos_biologicos'] ?? null,
            'otros_activos_corrientes' => $result['otros_activos_corrientes'] ?? null,
            'activos_no_corrientes_venta' => $result['activos_no_corrientes_venta'] ?? null,
            'deudores_comerciales_no_corriente' => $result['deudores_comerciales_no_corriente'] ?? null,
            'inversiones_asociadas_negocios' => $result['inversiones_asociadas_negocios'] ?? null,
            'propiedades_planta_equipo' => $result['propiedades_planta_equipo'] ?? null,
            'activos_por_derechos' => $result['activos_por_derechos'] ?? null,
            'propiedades_inversion' => $result['propiedades_inversion'] ?? null,
            'plusvalia' => $result['plusvalia'] ?? null,
            'otros_activos_intangibles' => $result['otros_activos_intangibles'] ?? null,
            'activo_por_impuesto_diferido' => $result['activo_por_impuesto_diferido'] ?? null,
            'otros_activos_no_corrientes' => $result['otros_activos_no_corrientes'] ?? null,
            'obligaciones_financieras_corrientes' => $result['obligaciones_financieras_corrientes'] ?? null,
            'pasivos_por_derecho_corriente' => $result['pasivos_por_derecho_corriente'] ?? null,
            'proveedores_cuentas_pagar_corriente' => $result['proveedores_cuentas_pagar_corriente'] ?? null,
            'impuestos_por_pagar_corriente' => $result['impuestos_por_pagar_corriente'] ?? null,
            'pasivo_beneficios_empleados_corriente' => $result['pasivo_beneficios_empleados_corriente'] ?? null,
            'provisiones_corriente' => $result['provisiones_corriente'] ?? null,
            'obligaciones_financieras_no_corriente' => $result['obligaciones_financieras_no_corriente'] ?? null,
            'pasivos_por_derecho_no_corriente' => $result['pasivos_por_derecho_no_corriente'] ?? null,
            'proveedores_cuentas_pagar_no_corriente' => $result['proveedores_cuentas_pagar_no_corriente'] ?? null,
            'pasivo_beneficios_empleados_no_corriente' => $result['pasivo_beneficios_empleados_no_corriente'] ?? null,
            'pasivo_por_impuesto_diferido' => $result['pasivo_por_impuesto_diferido'] ?? null,
            'provisiones_no_corriente' => $result['provisiones_no_corriente'] ?? null,
            'pib' => $result['pib'] ?? null,
            'inflacion' => $result['inflacion'] ?? null,
            'tasa_interes' => $result['tasa_interes'] ?? null,
            'tasa_desempleo' => $result['tasa_desempleo'] ?? null,
            'capital_emitido' => $result['capital_emitido'] ?? null,
            'prima_emision_capital' => $result['prima_emision_capital'] ?? null,
            'reservas_utilidades_acumuladas' => $result['reservas_utilidades_acumuladas'] ?? null,
            'otro_resultado_integral' => $result['otro_resultado_integral'] ?? null,
            'utilidad_periodo' => $result['utilidad_periodo'] ?? null,
            'patrimonio_atributable_controladoras' => $result['patrimonio_atributable_controladoras'] ?? null,
            'participaciones_no_controladoras' => $result['participaciones_no_controladoras'] ?? null,
            'costos_venta' => $result['costos_venta'] ?? null,
            'utilidad_bruta' => $result['utilidad_bruta'] ?? null,
            'gastos_administracion' => $result['gastos_administracion'] ?? null,
            'gastos_venta' => $result['gastos_venta'] ?? null,
            'gastos_produccion' => $result['gastos_produccion'] ?? null,
            'diferencia_cambio_activos_pasivos' => $result['diferencia_cambio_activos_pasivos'] ?? null,
            'otros_ingresos_netos' => $result['otros_ingresos_netos'] ?? null,
            'utilidad_operativa' => $result['utilidad_operativa'] ?? null,
            'ingresos_financieros' => $result['ingresos_financieros'] ?? null,
            'gastos_financieros' => $result['gastos_financieros'] ?? null,
            'dividendos' => $result['dividendos'] ?? null,
            'diferencia_cambio_activos_pasivos_no_operativos' => $result['diferencia_cambio_activos_pasivos_no_operativos'] ?? null,
            'participacion_asociadas_negocios' => $result['participacion_asociadas_negocios'] ?? null,
            'utilidad_antes_impuestos' => $result['utilidad_antes_impuestos'] ?? null,
            'impuesto_renta_corriente' => $result['impuesto_renta_corriente'] ?? null,
            'impuesto_renta_diferido' => $result['impuesto_renta_diferido'] ?? null,
            'utilidad_periodo_operaciones_continuadas' => $result['utilidad_periodo_operaciones_continuadas'] ?? null,
            'operaciones_discontinuadas' => $result['operaciones_discontinuadas'] ?? null,
            'utilidad_neta_periodo' => $result['utilidad_neta_periodo'] ?? null,
            'razon_corriente' => $result['razon_corriente'] ?? null,
            'kwn' => $result['kwn'] ?? null,
            'prueba_acida' => $result['prueba_acida'] ?? null,
            'rotacion_ctas_x_cobrar' => $result['rotacion_ctas_x_cobrar'] ?? null,
            'rotacion_inventarios' => $result['rotacion_inventarios'] ?? null,
            'ciclo_operacion' => $result['ciclo_operacion'] ?? null,
            'rotacion_proveedores' => $result['rotacion_proveedores'] ?? null,
            'ciclo_caja' => $result['ciclo_caja'] ?? null,
            'rotacion_activos' => $result['rotacion_activos'] ?? null,
            'rentabilidad_operativa' => $result['rentabilidad_operativa'] ?? null,
            'roi' => $result['roi'] ?? null,
            'rentabilidad_patrimonio' => $result['rentabilidad_patrimonio'] ?? null,
            'margen_utilidad_bruta' => $result['margen_utilidad_bruta'] ?? null,
            'margen_utilidad_operacional' => $result['margen_utilidad_operacional'] ?? null,
            'margen_utilidad_antes_impuestos' => $result['margen_utilidad_antes_impuestos'] ?? null,
            'margen_utilidad_neta' => $result['margen_utilidad_neta'] ?? null,
            'nivel_endeudamiento' => $result['nivel_endeudamiento'] ?? null,
            'nivel_endeudamiento_corto_plazo' => $result['nivel_endeudamiento_corto_plazo'] ?? null,
            'nivel_endeudamiento_largo_plazo' => $result['nivel_endeudamiento_largo_plazo'] ?? null,
            'nivel_apalancamiento' => $result['nivel_apalancamiento'] ?? null,
            'cobertura_intereses' => $result['cobertura_intereses'] ?? null,
            'cobertura_deuda' => $result['cobertura_deuda'] ?? null,
            'capital_trabajo' => $result['capital_trabajo'] ?? null,
            'capital_trabajo_neto' => $result['capital_trabajo_neto'] ?? null,
            'efectivo_trabajo_neto' => $result['efectivo_trabajo_neto'] ?? null,
            'activo_circulante' => $result['activo_circulante'] ?? null,
            'pasivo_circulante' => $result['pasivo_circulante'] ?? null,
            'total_patrimonio' => $result['total_patrimonio'] ?? null,
            'total_pasivo' => $result['total_pasivo'] ?? null,
            'total_activos' => $result['total_activos'] ?? null,
            'costo_deuda' => $result['costo_deuda'] ?? null,
            'rentabilidad_activos' => $result['rentabilidad_activos'] ?? null,
            'rentabilidad_intereses' => $result['rentabilidad_intereses'] ?? null,
            'total_gastos_intereses' => $result['total_gastos_intereses'] ?? null,
            'revaluacion_mercado' => $result['revaluacion_mercado'] ?? null,
        ]);
    }

    DB::commit();

      } catch (\Exception $e) {
    DB::rollBack();
    Log::error('Error guardando resultados: ' . $e->getMessage());
    throw $e;  // Re-lanzar la excepción para ser gestionada por el sistema
    }

  }
}
