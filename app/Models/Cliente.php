<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['cedula_cliente', 'nombres_cliente', 'apellidos_cliente', 'celular_cliente',
                            'email_cliente', 'departamento_cliente', 'ciudad_cliente', 'barrio_cliente'];

    public function ventas(){
        return $this->hasMany(Venta::class);
    }
}
