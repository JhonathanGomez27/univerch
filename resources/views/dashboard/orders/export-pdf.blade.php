<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>EXPORTS</title>
</head>

<body>
    <div class="container">
        <div>
            <h1> {{ $title }}</h1>
        </div>

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
                        <td scope="row">{{ $order->id }}</td>
                        <td>{{ $order->product->title }}</td>
                        <td>{{ $order->cantidad }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->comprador->name }}</td>
                        <td>{{ $order->vendedor->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
