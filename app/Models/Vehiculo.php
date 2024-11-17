<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    // Definir el nombre de la tabla
    protected $table = 'vehiculos_nuevos';

    // Definir los campos que son asignables masivamente
    protected $fillable = [
        'Motor_T_Vehiculo',
        'Serie_T_Vehiculo',
        'Marca_T_Vehiculo',
        'Modelo_T_Vehiculo',
        'Color_T_Vehiculo',
        'F_Venta_T_Vehiculo',
        'Vehiculo_T_Vehiculo'
    ];

    // Deshabilitar las marcas de tiempo si la tabla no las tiene
    public $timestamps = false;
}

