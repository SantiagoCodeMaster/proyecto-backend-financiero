<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngresoUtilidadGasto extends Model
{
    

   protected $table = 'ingresos_utilidades_gastos';
   protected $primaryKey = 'id_iug';

   // Relación inversa: pertenece a una Empresa
   public function empresa()
   {
      return $this->belongsTo(Empresa::class, 'id_empresa');
   }
    protected $fillable = [
     'fecha',
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
     'id_empresa'
    ];
    }

