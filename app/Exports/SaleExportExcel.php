<?php

namespace App\Exports;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SaleExportExcel implements FromView
{
    /**
    * @return \Illuminate\Support\FromView
    */
    public function view(): View
    {
        $id = auth()->id();
        $orders= Order::all()->where('estado', '=', 'aprovado')
        ->where('vendedor_id','=',$id);
        return view('dashboard.orders.export',['orders'=>$orders]);
        //return view('dashboard.orders.index', ['orders' => $orders]);
    }
}
