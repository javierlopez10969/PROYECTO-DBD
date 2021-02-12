<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DireccionDespacho extends Model
{
    protected $table = 'direccion_despachos';
	public $timestamps = false;
    use HasFactory;
	
	//CLIENTE
    public function Cliente (){
        return $this->belongsTo(Cliente::class);
    }
	
    //ORDEN DE DESPACHO
    public function Orden_de_despacho (){
        #return $this->belongsTo(Orden_de_despacho::class);
        return $this->belongsTo(OrdenDeDespacho::class);
    }
	
    //COMUNA
    public function Comuna(){
        return $this->belongsTo(Comuna::class);
    }
	
}
