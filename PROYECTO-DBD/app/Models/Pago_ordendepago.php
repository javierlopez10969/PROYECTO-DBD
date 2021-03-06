<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago_ordendepago extends Model
{
    protected $table = 'pago_ordendepago';
	public $timestamps = false;
    use HasFactory;
    //Pago
    public function Pago(){
        return $this->belongsTo(Pago::class);
    }
    //Orden_de_pago
    public function Orden_de_pago(){
        #return $this->belongsTo(Orden_de_pago::class);
        return $this->belongsTo(OrdenDePago::class);
    }
}
