@extends('dashboard.master')
@section('content')

@include('dashboard.partials.validation-error')

<div class="form-show">
    <h3>Titulo</h3>
    <h5 class="">{{$product->title}}</h5>
    <h3>Descripcion del producto</h3>
    <h5 class="">{{$product->content}}</h5>
    <h4>precio</h4>
    <h5 class="">{{$product->precio}}</h5>
    <h4>Facultad de interes</h4>
    <h5 class="">{{$product->facultad->title}}</h5>
    <h4>Nombre del vendedor</h4>
    <h5 class="">{{$product->user->name}}</h5>
    <div>
        @foreach ($product->image as $image)
            <div class="card-body">
                <img src="{{asset('storage').'/'.'images'.'/'.$product->image->first()->image}}" alt="Card image cap">
            </div>
        @endforeach
    </div>
</div>

<div class="otrp">

</div>

@endsection


