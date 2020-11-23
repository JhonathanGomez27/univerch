@extends('dashboard.master')
@section('content')

<div class="row mb-2">
    @foreach ($products as $product)
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="https://www.mayoristatecnologico.com.co/images/detailed/4/A15YAB_dell_-_tienda_maitek.jpg?t=1589739873" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$product->precio}}</h6>
                    <h6 class="card-text">Facultad: {{ $product->facultad->title }}</h6>
                    <h6 class="card-text">Vendedor: {{ $product->user->name }}</h6>
                    <a href="{{url('../../profile',$product->user->id)}}" class="btn btn-outline-primary">Perfil</a>
                    <a href="{{route('product.show',$product->id)}}" class="btn btn-outline-primary">Mas información</a>
                </div>


                <div>

                </div>
              </div>
        </div>
        <div class="col-2">
        </div>
    @endforeach

</div>
<div>
    <a href="{{url('../../profile',auth()->id())}}" class="btn btn-outline-primary">Mi Perfil</a>
</div>
@endsection
