<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $table = 'movimientos';
    protected $primaryKey = 'id_movimiento';

    // Relación inversa: pertenece a una Empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }

    protected $fillable = [
        'fecha',
        'ingresos_totales',
        'ventas_por_producto_servicio',
        'costos_ventas',
        'gastos_fijos_variables',
        'ganancias_perdidas_netas',
        'unidades_producidas_servicios_prestados',
        'porcentaje_utilizacion_capacidad',
        'costos_unitarios',
        'volumen_venta'
    ];
}
