<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
	
	protected $table = 'pagos';
	public $timestamps = false;
    use HasFactory;
    //ORDEN DE COMPRA
    public function Orden_de_compra (){
        #return $this->belongsTo(Orden_de_compra::class);
        return $this->belongsTo(OrdenDeCompra::class);
    }
    //ORDEN DE DESPACHO
    public function Orden_de_despacho (){
        return $this->belongsTo(OrdenDeDespacho::class);
    }
    //PAGO ORDEN DE PAGO
    //De entidad a tabla intermedia, uno es a muchos
    public function Pago_ordendepago(){
        return $this->hasMany(Pago_ordendepago::class);
    }
}
