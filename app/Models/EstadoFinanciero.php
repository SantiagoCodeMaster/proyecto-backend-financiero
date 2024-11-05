<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoFinanciero extends Model
{
    protected $table = "estado_financiero";
    protected $primaryKey = 'id_estado';

    // Relación inversa: pertenece a una Empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }

    protected $fillable = [
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
        'id_empresa', 
    ];
}
