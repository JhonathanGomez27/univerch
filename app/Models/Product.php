<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title','content','precio','estado','facultad_id','user_id'];
    /**
     * Falta realizar la relación con facultades
     * y con usuario
     */
    
}
