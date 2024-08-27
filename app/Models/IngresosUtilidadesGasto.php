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
}
