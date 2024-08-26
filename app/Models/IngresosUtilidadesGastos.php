<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngresosUtilidadesGastos extends Model
{
    protected $primaryKey = 'id_iug';

    // Relación inversa: pertenece a una Empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }
}
