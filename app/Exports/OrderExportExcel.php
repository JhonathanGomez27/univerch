<?php

namespace App\Exports;

use App\Models\Order;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderExportExcel implements FromView,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Cantidad',
            'Cost',
            'Comprados',
            'Vendedor',
        ];
    }

    public function view(): View
    {
        $id = auth()->id();
        $orders= Order::all()->where('estado', '=', 'aprovado')
        ->where('comprador_id','=',$id);
        return view('dashboard.orders.export',['orders'=>$orders]);
        //return view('dashboard.orders.index', ['orders' => $orders]);
    }
    
}
