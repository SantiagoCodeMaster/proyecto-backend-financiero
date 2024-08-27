<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{   
    protected $table = 'empresa';
    protected $primaryKey = 'id_empresa';

    // Relación uno a muchos con Estado_Financiero
    public function estadoFinancieros()
    {
        return $this->hasMany(EstadoFinanciero::class, 'id_empresa');
    }

    // Relación uno a muchos con Patrimonio
    public function patrimonios()
    {
        return $this->hasMany(Patrimonio::class, 'id_empresa');
    }

    // Relación uno a muchos con Ingresos_Utilidades_Gastos
    public function ingresosUtilidadesGastos()
    {
        return $this->hasMany(IngresoUtilidadGasto::class, 'id_empresa');
    }

    // Relación uno a muchos con Movimientos
    public function movimientos()
    {
        return $this->hasMany(Movimiento::class, 'id_empresa');
    }

    // Relación uno a muchos con Productos
    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_empresa');
    }

    // Relación uno a muchos con Cliente
    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'id_empresa');
    }

    // Relación uno a muchos con Indicadores_Financieros
    public function indicadoresFinancieros()
    {
        return $this->hasMany(IndicadorFinanciero::class, 'id_empresa');
    }
}
