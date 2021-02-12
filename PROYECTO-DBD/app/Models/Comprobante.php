<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    protected $table = 'comprobantes';
	public $timestamps = false;
    use HasFactory;
    //ORDEN DE PAGO
    public function Orden_de_pago (){
        #return $this->belongsTo(Orden_de_pago::class);
        return $this->belongsTo(OrdenDePago::class);
    }
	
}
