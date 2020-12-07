@extends('dashboard.master')
@section('content')

<div class="container-sales-orders">
    <div class="container-so">
        <div class="row ">
            <div class="col sm-2">
                <h1 class='retroshadow'>Mis Ventas</h1>
                <br>
              <table class="table table-striped">
                  <thead>
                      <th>Id</th>
                      <th>Producto</th>
                      <th>Comprador</th>
                      <th>Vendedor</th>
                  </thead>
                      <tbody>

                              @foreach ($sales as $sale)
                                <tr>
                                  <td>{{ $sales}}</td>
                                  <td>{{ $sale->product->title  }}</td>
                                  <td>{{ $sale->comprador->name  }}</td>
                                  <td>{{ $sale->vendedor->name}}</td>
                                </tr>
                              @endforeach

                       </tbody>
              </table>

              <div class="btn--archivos">
                <a class="btn pdf--btn" href="{{route('sales.pdf')}}"> Generar PDF </a>
                <input class="btn pdf--btn" style="visibility: hidden;" value="">
                <a class="btn excel--btn" href="{{route('sales.excel')}}"> Generar Excel </a>
              </div>

              <br>
              <div class="col sm-2">
                <h1 class='retroshadow'>Mis Compras</h1>
                <br>
                    <table class="table table-striped">
                        <thead>
                            <th>Id</th>
                            <th>Producto</th>
                            <th>Comprador</th>
                            <th>Vendedor</th>
                            <th>PQR</th>
                        </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id}}</td>
                                        <td>{{ $order->product->title}}</td>
                                        <td>{{ $order->comprador->name}}</td>
                                        <td>{{ $order->vendedor->name}}</td>
                                        <td><a class="btn btn-primary" href="{{route('pqr.create')}}"> Generar Pqr</a> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
                <div class="btn--archivos">
                    <a class="btn pdf--btn" href="{{route('orders.pdf')}}"> Generar PDF </a>
                    <input class="btn pdf--btn" style="visibility: hidden;" value="">
                    <a class="btn excel--btn" href="{{route('orders.excel')}}"> Generar Excel </a>
                  </div>
              </div>
          </div>
    </div>

</div>

@endsection
