<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenDeDespacho extends Model
{
    public $timestamps = false;
    protected $table = 'ordendedespacho';
	protected $primaryKey = 'id';
	protected $keyType = 'string';

    use HasFactory;
    public function pago(){
        return $this->belongsTo(Pago::class);
    }
    
    public function feriante(){
        return $this->belongsTo(Feriante::class);
    }

    public function direccion_despacho(){
        return $this->belongsTo(DireccionDespacho::class);
    }
}
