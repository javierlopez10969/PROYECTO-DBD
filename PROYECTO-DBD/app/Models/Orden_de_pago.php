<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden_de_pago extends Model
{
    use HasFactory;
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
    //De entidad a tabla intermedia, uno es a muchos
    public function Pago_ordendepago(){
        return $this->hasMany(Pago_ordendepago::class);
    }
}
