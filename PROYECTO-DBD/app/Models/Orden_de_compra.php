<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden_de_compra extends Model
{
    use HasFactory;
    //Pago
    public function Pago(){
        return $this->hasOne(Pago::class);
    }

    //Productos_orden_de_compra
    public function Productos_orden_de_compra (){
        return $this->hasMany(Productos_orden_de_compra::class);
    }

    //Cliente
    public function Cliente () {
        return $this->belongsTo(Cliente::class);
    }
}
