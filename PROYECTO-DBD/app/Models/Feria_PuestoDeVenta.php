<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feria_PuestoDeVenta extends Model
{
	use HasFactory;
	
	public function feria()
	{
		return
		$this->hasMany(Feria::class);
	}

	public function puestoDeVenta()
	{
		return
		$this->hasMany(PuestoDeVenta::class);
	}

    
}
