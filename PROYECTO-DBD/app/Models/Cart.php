<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = false;
    use HasFactory;
	protected $table = 'carts';
    protected $primaryKey = 'id';
    public $incrementing = false;
	
    public function producto(){
        return $this->hasMany(Producto::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    } 
}
