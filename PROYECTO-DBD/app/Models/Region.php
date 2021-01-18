<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
	use HasFactory;
	
	protected $table = 'region';
	public $timestamps = false;
	protected $primaryKey = 'id_region';
	
	public function comuna()
	{
		return $this->hasMany(Comuna::class);
	}
    
}
