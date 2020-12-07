@extends('dashboard.master')
@section('content')

<div class="row sm-3">
  <div class="col-4">
    <div >
        <div class>
            <h5 class>Mis compras</h5>


        </div>
      </div>
  </div>
  <div class="col-2">
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Producto</th>
            <th>Comprador</th>
            <th>Vendedor</th>
        </thead>
            <tbody>

                    @foreach ($orders as $order)
                      <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->product->title  }}</td>
                        <td>{{ $order->comprador->name  }}</td>
                        <td>{{$order->product->user->name}}</td>
                      </tr>
                    @endforeach

             </tbody>

</div>
</div>





@endsection
