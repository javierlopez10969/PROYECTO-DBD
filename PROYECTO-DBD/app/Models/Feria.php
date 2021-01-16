<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feria extends Model
{
	public function comuna();
	{
		return
		$this->hasMany('App\Models\Comuna');
	}

	public function feria_FeriaFavoritos();
	{
		return
		$this->hasMany('App\Models\Feria_FeriaFavoritos');
	}

	public function feria_PuestoDeVenta();
	{
		return
		$this->hasMany('App\Models\PuestoDeVenta');
	}

    use HasFactory;
}
