<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request){

        $product = Product::find($request->producto_id);
        Cart::add(
            $product->id,
            $product->title,
            $product->precio,
            1,
            $product->user_id,


        );
        //return view('dashboard.cart.index',"Producto actualizado con exito",['product'=> $producto]);
        return back()->with('succes', "$product->title | se ha agregado correctamente");


    }


    public function cart(){

        return view('dashboard.cart.index');
    }

    public function removeitem(Request $request){
        //$product = Product::where('id' , $request->id)->firstOrFail();
        Cart::remove([
            'id' => $request->id,

        ]);
        return back()->with('success', 'Producto eliminado del carrito');
    }

    public function clear(){

        Cart::clear();
        return back()->with('success', "carrito vacio" );
    }


}
