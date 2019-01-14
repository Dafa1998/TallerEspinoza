<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    public $timestaps = false;
    
    protected $fillable = [
        'id', 'proveedor_id', 'fecha', 'producto_id', 'cantidad',
        'subtotal', 'descuento', 'total'
    ];
}
