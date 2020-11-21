<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facultad extends Model
{
    use HasFactory;
    protected $fillable = ['title','content'];

    /**Una facultad podra tener muchos productos */
    public function product(){
        return $this->hasMany(Product::class);
    }

}
