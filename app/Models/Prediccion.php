<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediccion extends Model
{
    use HasFactory;


    // Nombre de la tabla asociada
    protected $table = 'predicciones';

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'user_id',
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
        'pib',
        'inflacion',
        'tasa_interes',
        'tasa_desempleo',
        'capital_emitido',
        'prima_emision_capital',
        'reservas_utilidades_acumuladas',
        'otro_resultado_integral',
        'utilidad_periodo',
        'patrimonio_atributable_controladoras',
        'participaciones_no_controladoras',
        'costos_venta',
        'utilidad_bruta',
        'gastos_administracion',
        'gastos_venta',
        'gastos_produccion',
        'diferencia_cambio_activos_pasivos',
        'otros_ingresos_netos',
        'utilidad_operativa',
        'ingresos_financieros',
        'gastos_financieros',
        'dividendos',
        'diferencia_cambio_activos_pasivos_no_operativos',
        'participacion_asociadas_negocios',
        'utilidad_antes_impuestos',
        'impuesto_renta_corriente',
        'impuesto_renta_diferido',
        'utilidad_periodo_operaciones_continuadas',
        'operaciones_discontinuadas',
        'utilidad_neta_periodo',
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
    ];

    // Relación con el modelo User (muchos a uno)
    public function user()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }
}