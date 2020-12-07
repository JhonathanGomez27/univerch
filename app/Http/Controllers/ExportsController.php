<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Exports\SaleExportExcel;
use App\Exports\OrderExportExcel;
use App\Exports\HeadersExportExcel;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportsController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function exportOrdersPDF()
    {
        $id = auth()->id();
        $orders= Order::all()->where('estado', '=', 'aprovado')
        ->where('comprador_id','=',$id);
        
        $pdf = \PDF::loadView('dashboard.orders.export-pdf',['orders'=>$orders,'title'=>'Mis pedidos aprobados']);
 //       $pdf->setPaper("A4", "landscape");
        return $pdf->download('orders'.time().'.pdf');
    }
    
    public function exportSalesPDF()
    {
        $id = auth()->id();
        $orders= Order::all()->where('estado', '=', 'aprovado')
        ->where('vendedor_id','=',$id);
        $pdf = \PDF::loadView('dashboard.orders.export-pdf',['orders'=>$orders,'title'=>'Mis ventas aprobados']);
  //      $pdf->setPaper("A4", "landscape");
        return $pdf->download('orders'.time().'.pdf');
    }
    public function exportOrdersExcel(){
        return Excel::download(new OrderExportExcel, 'orders'.time().'.xls');
    }
    public function exportSalesExcel(){
        return Excel::download(new SaleExportExcel, 'sales'.time().'.xlsx');
    }
}
