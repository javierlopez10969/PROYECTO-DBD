<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feria extends Model
{
	use HasFactory;
		
	protected $table = 'feria';
	public $timestamps = false;
	protected $primaryKey = 'id_feria';
	protected $keyType = 'string';
	
	public function comuna()
	{
		return
		$this->belongsTo(Comuna::class);
	}

	public function feria_FeriaFavoritos()
	{
		return
		$this->hasMany(Feria_FeriaFavoritos::class);
	}

	public function feria_PuestoDeVenta()
	{
		return
		$this->hasMany(PuestoDeVenta::class);
	}

    
}
