<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrimonio extends Model
{
    protected $table = 'patrimonio';
    protected $primaryKey = 'id_patrimonio';

    // Relación inversa: pertenece a una Empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }
    protected $fillable = [
         'fecha',
         'capital_emitido',
         'prima_emision_capital',
         'reservas_utilidades_acumuladas',
         'otro_resultado_integral',
         'utilidad_periodo',
         'patrimonio_atributable_controladoras',
         'participaciones_no_controladoras',
         'id_empresa',
    ];
}
