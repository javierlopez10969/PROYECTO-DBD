<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feriante extends Model
{
	public function puestoDeVenta();
	{
		return
		$this->hasMany('App\Models\PuestoDeVenta');
	}

	public function datos_personal();
	{
		return
		$this->hasOne('App\Models\Datos_Personal');
	}

	public function feria_FeriaFavorito();
	{
		return
		$this->hasMany('App\Models\Feria_FeriaFavorito');
	}

	public function cuenta_bancaria();
	{
		return
		$this->hasMany('App\Models\Cuenta_bancaria');
	}

	public function ordenDeDespacho();
	{
		return
		$this->hasMany('App\Models\OrdenDeDespacho');
	}

	public function orden_de_pago();
	{
		return
		$this->hasMany('App\Models\Orden_de_pago');
	}
    use HasFactory;
}
