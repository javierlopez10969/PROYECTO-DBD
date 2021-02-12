<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
	public $timestamps = false;
	//ORDEN DE COMPRA
    public function Orden_de_compra (){
        #return $this->hasMany(Orden_de_compra::class);
        return $this->hasMany(OrdenDeCompra::class);
    }
    //DIRECCION DE DESPACHO
    public function Direccion_de_despacho (){
        #return $this->hasMany(Direccion_de_despacho::class);
        return $this->hasMany(DireccionDespacho::class);
    }
    //CUENTA BANCARIA
    public function Cuenta_bancaria(){
        #return $this->hasMany(Cuenta_bancaria::class);
        return $this->hasMany(CuentaBancaria::class);
    }
	//FERIA FAVORITOS
    public function Feria_favorito (){
        #return $this->hasOne(Feria_favorito::class);
        return $this->hasOne(FeriaFavorito::class);
    }
    //FERIANTE FAVORITOS
    public function Feriante_favorito (){
        #return $this->hasOne(Feriante_favorito::class);
        return $this->hasOne(FeriantesFavorito::class);
    }
    //DATOS PERSONALES
    public function Datos_Personal(){
        return $this->hasOne(Datos_personal::class);
    }
}
