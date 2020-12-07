<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function getMyOrders()
    {
        $id = auth()->id();
        //Para filtar por id//->where('id', '=', '2')->paginate(10);
        $orders = Order::orderBy('created_at','desc')
        ->where('estado', '=', 'aprovado')
        ->where('comprador_id','=',$id)
        ->paginate(10);

        //Para filtar por id//->where('id', '=', '2')->paginate(10);
        $sales = Order::orderBy('created_at','desc')
        ->where('estado', '=', 'aprovado')
        ->where('vendedor_id','=',$id)

        ->paginate(10);
        return view('dashboard.orders.index',['orders'=>$orders ,'sales'=>$sales]);
    }


    /* public function getMySales()
    {

        ->paginate(10);
        return view('dashboard.orders.index',['sales'=>$sales]);
    } */
}
