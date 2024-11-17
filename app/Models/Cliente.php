<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 't_clientes'; // Nombre de la tabla en la base de datos

    // Define los campos que deseas que sean asignables masivamente.
    protected $fillable = [
        'nombre', 'calle', 'colonia', 'numero', 'ciudad', 'codigo_postal', 
        'email', 'telefono', 'uso_cfdi', 'metodo_pago', 'regimen_fiscal'
    ];
}
