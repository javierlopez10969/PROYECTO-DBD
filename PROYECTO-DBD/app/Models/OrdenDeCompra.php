<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenDeCompra extends Model
{
	
	
    use HasFactory;
    //Pago
    public function Pago(){
        return $this->hasOne(Pago::class);
    }

    //PRODUCTOS .- ORDEN DE COMPRA
    public function Productos_orden_de_compra (){
        return $this->hasMany(Productos_orden_de_compra::class);
    }

    //Cliente
    public function Cliente () {
        return $this->belongsTo(Cliente::class);
    }
}
