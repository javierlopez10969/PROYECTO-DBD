<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feriante_FeriantesFavorito extends Model
{
    use HasFactory;
    public function feriante(){
        return $this->belongsTo(Feriante::class);
    }

    public function feriantesFavoritos(){
        return $this->belongsTo(FeriantesFavorito::class);
    }


}
