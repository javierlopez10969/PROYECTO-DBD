<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    public $timestamps = false;
    protected $table = 'unidad';
	protected $primaryKey = 'id';
	protected $keyType = 'string'; 
    use HasFactory;
    public function Producto(){
        return $this->belongsTo(Producto::class);
    } 

}
