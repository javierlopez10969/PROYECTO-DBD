<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeriaFavorito extends Model
{
    use HasFactory;
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function feria_feriaFavoritos(){
        return $this->hasMany(Feria_FeriaFavorito::class);
    }


}
