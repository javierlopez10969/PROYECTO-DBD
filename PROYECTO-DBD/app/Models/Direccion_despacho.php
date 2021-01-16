<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion_despacho extends Model
{
    use HasFactory;
	
	//CLIENTE
    public function Cliente (){
        return $this->belongsTo(Cliente::class);
    }
	
    //ORDEN DE DESPACHO
    public function Orden_de_despacho (){
        return $this->belongsTo(Orden_de_despacho::class);
    }
	
    //COMUNA
    public function Comuna(){
        return $this->belongsTo(Comuna::class);
    }
	
}
