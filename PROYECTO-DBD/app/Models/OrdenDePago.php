<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenDePago extends Model
{
    use HasFactory;
    		
	protected $table = 'orden_de_pagos';
	public $timestamps = false;
	protected $primaryKey = 'id_orden_pagos';
    protected $keyType = 'string';
    
    
    //Comprobante
    public function Comprobante(){
        return $this->hasOne(Comprobante::class);
    }
    //Feriante
    public function Feriante(){
        return $this->belongsTo(Feriante::class);
    }
    //Cuenta Bancaria
    public function Cuenta_bancaria(){
        return $this->hasMany(Cuenta_bancaria::class);
    }

    //PAGO ORDEN DE PAGO
    public function Pago_ordendepago(){
        return $this->hasMany(Pago_ordendepago::class);
    }
}
