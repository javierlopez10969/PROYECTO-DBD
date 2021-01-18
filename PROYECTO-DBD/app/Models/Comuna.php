<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
	use HasFactory;
	
	public function feria()
	{
		return $this->hasMany(Feria::class);
	}
	public function region()
	{
		return $this->belongsTo(Region::class);
	}
    
}
