<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos_personal extends Model
{
	public $timestamps = false;
    use HasFactory;
	
	//CLIENTE
    public function Cliente (){
        return $this->belongsTo(Cliente::class);
    }
    //FERIANTE
    public function Feriante (){
        return $this->belongsTo(Feriante::class);
    }

}
