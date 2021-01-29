<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feriante extends Model
{
	public $timestamps = false;
	use HasFactory;
	protected $table = 'feriante';
    protected $primaryKey = 'id';
	public $incrementing = false;
	
	public function puestoDeVenta()
	{
		return
		$this->hasMany(PuestoDeVenta::class);
	}

	public function datos_personal()
	{
		return
		$this->hasOne(Datos_Personal::class);
	}

	public function feria_FeriaFavorito()
	{
		return
		$this->hasMany(Feria_FeriaFavorito::class);
	}

	public function cuenta_bancaria()
	{
		return
		$this->hasMany(Cuenta_bancaria::class);
	}

	public function ordenDeDespacho()
	{
		return
		$this->hasMany(OrdenDeDespacho::class);
	}

	public function orden_de_pago()
	{
		return
		$this->hasMany(Orden_de_pago::class);
	}
    
}
