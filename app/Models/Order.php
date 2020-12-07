<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['vendedor_id','comprador_id','product_id','precio_unitario','cantidad','total','estado'];
    //['vendedor','comprador','producto','precio_unitario','cantidad','total','estado'];



    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function comprador(){
        return $this->belongsTo(User::class);
    }
    public function vendedor(){
        return $this->belongsTo(User::class);
    }
}
