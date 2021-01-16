<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
	
	//ORDEN DE COMPRA
    public function Orden_de_compra (){
        return $this->hasMany(Orden_de_compra::class);
    }
    //DIRECCION DE DESPACHO
    public function Direccion_de_despacho (){
        return $this->hasMany(Direccion_de_despacho::class);
    }
    //CUENTA BANCARIA
    public function Cuenta_bancaria(){
        return $this->hasMany(Cuenta_bancaria::class);
    }
	//FERIA FAVORITOS
    public function Feria_favorito (){
        return $this->hasOne(Feria_favorito::class);
    }
    //FERIANTE FAVORITOS
    public function Feriante_favorito (){
        return $this->hasOne(Feriante_favorito::class);
    }
    //DATOS PERSONALES
    public function Datos_Personal(){
        return $this->hasOne(Datos_Personal::class);
    }
}
