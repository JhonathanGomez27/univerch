<table class="table table-striped">
    <thead class="thead-light">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Producto</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Total</th>
          <th scope="col">Comprador</th>
          <th scope="col">Vendedor</th>
        </tr>
      </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->product->title }}</td>
                <td> {{ $order->cantidad }}</td>
                <td> {{ $order->total }}</td>
                <td>{{ $order->comprador->name }}</td>
                <td>{{ $order->vendedor->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
