<?php

namespace App\Models;

use App\Models\Facultad;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title','content','precio','estado','facultad_id','user_id'];
    /**
     * Falta realizar la relación con facultades
     * y con usuario
     */

     /**Un producto pertenece a una facultad */
    public function facultad(){
        return $this->belongsTo(Facultad::class);
    }
    
}
