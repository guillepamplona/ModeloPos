<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = ['fecha_venta', 'id_cliente', 'id_producto'];

    public function clientes(){
        return $this->belongsTo(Cliente::class);
    }
    public function productos(){
        return $this->belongsTo(Producto::class);
    }
}
