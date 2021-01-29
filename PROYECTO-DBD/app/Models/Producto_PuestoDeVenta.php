<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto_PuestoDeVenta extends Model
{
	public $timestamps = false;
    use HasFactory;
    public function Producto(){
        return $this->belongsTo(Producto::class);
    }
    public function PuestoDeVenta(){
        return $this->belongsTo(PuestoDeVenta::class);
    }
}
