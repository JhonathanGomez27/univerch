<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['vendedor','comprador','producto','precio_unitario','cantidad','total','estado'];



    public function product(){
        return $this->hasMany(Product::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
}
