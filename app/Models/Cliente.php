<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model 
{
    protected $table = "cliente";
    protected $primaryKey = 'id_cliente';

    // Relación inversa: pertenece a una Empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    } 

    protected $fillable = [
        "nombre_cliente",
        "cedula_nit_cliente",
        'compras_mes'
    ];
}
