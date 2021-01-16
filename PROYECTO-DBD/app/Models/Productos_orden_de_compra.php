<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos_orden_de_compra extends Model
{
    use HasFactory;
    //Orden_de_compra
    public function Orden_de_compra(){
        return $this->belongsTo(Orden_de_compra::class);
    }
    public function Producto(){
        return $this->belongsTo(Producto::class);
    }

        
    
}
