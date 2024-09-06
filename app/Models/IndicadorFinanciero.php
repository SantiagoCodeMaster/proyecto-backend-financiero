<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndicadorFinanciero extends Model
{
    protected $table = 'indicadores_financieros';
    protected $primaryKey = 'id_indicador';

    // Relación inversa: pertenece a una Empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }

    protected $fillable = [
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
       'costo_patrimonio'
    ];
}
