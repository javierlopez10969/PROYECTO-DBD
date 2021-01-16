<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuestoDeVenta extends Model
{
    use HasFactory;
    public function Producto_PuestoDeVenta(){
        return $this->hasMany(Producto_PuestoDeVenta::class);
    }
    
    public function Feriante(){
        return $this->belongsTo(Feriante::class);
    }

    public function Feria_PuestoDeVenta(){
        return $this->hasMany(Feria_PuestoDeVenta::class);
    }
}
