<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feria_FeriaFavorito extends Model
{public $timestamps = false;
    use HasFactory;
	protected $table = 'feria_feriafavoritos';
    protected $primaryKey = 'id';
	
    public function feria(){
        return $this->belongsTo(Feria::class);
    }

    public function feria_favoritos(){
        return $this->belongsTo(FeriaFavorito::class);
    }
}
