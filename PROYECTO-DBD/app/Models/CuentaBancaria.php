<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaBancaria extends Model
{
	public $timestamps = false;
    use HasFactory;

	
	//ORDEN DE PAGO
    public function Orden_de_pago (){
        return $this->belongsTo(Orden_de_pago::class);
    }
	
    //CLIENTE
    public function Cliente (){
        return $this->belongsTo(Cliente::class);
    }
		
    //FERIANTE
    public function Feriante (){
        return $this->belongsTo(Feriante::class);
    }
	
	

	
}
