<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatoMacroeconomico extends Model
{ 
    public $timestamps = false; // Desactiva los timestamps automáticos
    protected $table = "datos_macroeconomicos";
    protected $primaryKey = 'id_macro';
    protected $fillable=  [
        'fecha',
        'pib',
        'inflacion',
        'tasa_interes',
        'tasa_desempleo'
    ];
}
 