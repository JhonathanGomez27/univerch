@extends('dashboard.master')
@section('content')

@include('dashboard.partials.validation-error')
<h2>Descripcion del producto</h2>
<h4>nombre</h4>
<h5 class="card-title">{{$product->title}}</h5>
<h4>precio</h4>
<h5 class="card-title">{{$product->precio}}</h5>
<h4>Facultad de interes</h4>
<h5 class="card-title">{{$product->facultad->title}}</h5>
<h4>Nombre del vendedor</h4>
<h5 class="card-title">{{$product->user->name}}</h5>

@endsection
