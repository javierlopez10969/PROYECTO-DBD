<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeriantesFavorito extends Model
{
    use HasFactory;
	protected $table = 'feriantesfavoritos';
    public $timestamps = false;
    protected $primaryKey = 'id';
	public $incrementing = false;
	
    public function feriante_feriantesFavoritos(){
        return $this->hasMany(Feriante_FeriantesFavorito::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
