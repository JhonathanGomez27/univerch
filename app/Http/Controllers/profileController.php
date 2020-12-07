<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function getPerfil( $id )
    {
        $user =User::find($id);
        if(is_object($user)){
            //count($product->image) 
            $id = $user->id;
            $sales= Order::all()->where('estado', '=', 'aprovado')
            ->where('vendedor_id','=',$id)->count();
            $products = Product::where('user_id','=',$id)
            ->count();
            return view('profile',['user'=> $user,'sales'=>$sales,'products'=>$products]);

        } else{
            echo('Este Perfil No existe');
        }
    }
}
