<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'telefono',
        'tipo_cliente'
    ];

    // Relación con Vehículos
    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }

    // Relación con Espacios (como cliente mensual)
    public function espacios()
    {
        return $this->hasMany(Espacio::class, 'cliente_id');
    }

    // Relación con Pagos Mensuales
    public function pagosMensuales()
    {
        return $this->hasMany(PagoMensual::class);
    }
}