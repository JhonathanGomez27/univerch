@extends('dashboard.master')
@section('content')
<div class="container-facultades">
    <div class="container-carrito">
        <div class="row">
        </div>
        <div class="col sm-3">
            @if (count(Cart::getContent()))
                    <table class="table table-striped">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Precio unitario</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Vendedor</th>
                            <th>Opciones</th>
                        </thead>
                            <tbody>
                                @foreach (Cart::getContent() as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>${{$item->price}}</td>
                                        <td>{{$item->quantity}}</td>


                                        <td>${{number_format($item->quantity*$item->price),0}} COP</td>
                                        <td>{{$item->vendedor}}</td>

                                        <td>
                                            <form action="{{route('cart.removeitem')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$item->id}}">
                                                <button type="submit" class="btn btn-link btn-sm text-danger">Eliminar del carrito</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3"></td>
                                    <td></td>
                                    <td>Total</td>
                                    <td>${{number_format(Cart::getTotal(),0)}} COP</td>
                                    <td>
                                        <form action="{{route('cart.clear')}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-link btn-sm text-danger">Vaciar carrito</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                    <form action="{{route('paypal.payWithPayPal')}}" method="POST">
                        @csrf
                         <input type="hidden" name="compra" value="{{Cart::getContent()}}">
                        <input type="hidden" name="total" value="{{Cart::getTotal()}}">

                        <button type="submit" class="btn pagar--btn">Pagar con Paypal</button>
                    </form>
                 @else
            @endif
         </div>
         <div class="col sm-10">

         </div>
    </div>

</div>
@endsection


