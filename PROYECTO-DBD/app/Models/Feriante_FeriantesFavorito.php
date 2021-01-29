<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feriante_FeriantesFavorito extends Model
{
	public $timestamps = false;
    use HasFactory;
	protected $table = 'feriante_feriantesfavoritos';
    protected $primaryKey = 'id';
	public $incrementing = false;
	
    public function feriante(){
        return $this->belongsTo(Feriante::class);
    }

    public function feriantesFavoritos(){
        return $this->belongsTo(FeriantesFavorito::class);
    }


}
