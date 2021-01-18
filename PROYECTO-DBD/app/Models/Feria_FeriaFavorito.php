<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feria_FeriaFavorito extends Model
{
    use HasFactory;
	protected $table = 'feria_feriafavoritos';
    public $timestamps = false;
    protected $primaryKey = 'id_feria_feriafavoritos';
	
    public function feria(){
        return $this->belongsTo(Feria::class);
    }

    public function feria_favoritos(){
        return $this->belongsTo(FeriaFavorito::class);
    }
}
