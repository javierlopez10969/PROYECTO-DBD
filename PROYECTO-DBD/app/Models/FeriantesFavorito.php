<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeriantesFavorito extends Model
{
    use HasFactory;
    public function feriante_feriantesFavoritos(){
        return $this->hasMany(Feriante_FeriantesFavorito::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
