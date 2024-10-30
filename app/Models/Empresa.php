<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Asegúrate de importar la clase correcta
use Illuminate\Notifications\Notifiable;

class Empresa extends Authenticatable // Extiende de Authenticatable
{
    use HasFactory, Notifiable; // Puedes combinar las declaraciones de uso

    protected $table = 'empresa';
    protected $primaryKey = 'id_empresa';

    protected $fillable = [
        'nombre_empresa',
        'email',
        'nit',
        'rublo', 
        'password'
    ];

    // Relaciones con otras tablas
    public function estadoFinancieros()
    {
        return $this->hasMany(EstadoFinanciero::class, 'id_empresa');
    }

    public function patrimonios()
    {
        return $this->hasMany(Patrimonio::class, 'id_empresa');
    }

    public function ingresosUtilidadesGastos()
    {
        return $this->hasMany(IngresoUtilidadGasto::class, 'id_empresa');
    }

    public function movimientos()
    {
        return $this->hasMany(Movimiento::class, 'id_empresa');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_empresa');
    }

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'id_empresa');
    }

    public function indicadoresFinancieros()
    {
        return $this->hasMany(IndicadorFinanciero::class, 'id_empresa');
    }

    // Agregar el método para obtener la contraseña
    public function getAuthPassword()
    {
        return $this->password;
    }
}