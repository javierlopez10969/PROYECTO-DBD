<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
	public function feria();
	{
		return
		$this->hasMany('App\Models\Feria');
	}
	public function region();
	{
		return
		$this->belongsTo('App\Models\Region');
	}
    use HasFactory;
}
