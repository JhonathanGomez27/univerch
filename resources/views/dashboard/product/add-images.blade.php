@extends('dashboard.master')
@section('content')

@include('dashboard.partials.validation-error')
<div class="col-5">
    <div class="card-body">
        <h5 class="card-title">{{$product->title}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$product->precio}}</h6>
        <h6 class="card-text">Facultad: {{ $product->facultad->title }}</h6>
        <h6 class="card-text">Vendedor: {{ $product->user->name }}</h6>
    </div>
</div>
<div class="col-5">
    
    <form action="{{ route("product.image",$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Agregar Imagenes</label>
            <div class="input-group">
                <div class="custom-file">
                    <div class="col">
                        <input type="file"  name="image" id="image" class="custom-file-input">
                        <label class="custom-file-label" for="file">Agregar imagenes</label>
                    </div>
                </div>
                <div class="input-group-append">
                    <input type="submit" class="btn btn-success" value="Cargar Imagen">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection