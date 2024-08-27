<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatoMacroeconomico extends Model
{ 
    protected $table = "datos_macroeconomicos";
    protected $primaryKey = 'id_macro';
}
