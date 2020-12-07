@extends('dashboard.master')
@section('content')

@include('dashboard.partials.validation-error')

<div class="container-add-image">
    <div class="add--imageForm">
        <div class="col-5">
            <p style="font-size: 40px; text-transform: uppercase;">{{$product->title}}</p>
            <p class="text-muted" style="font-size: 30px"> {{$product->precio}}</p>
            <p style="font-size: 20px">Facultad: {{ $product->facultad->title }}</p>
            <p style="font-size: 20px">Descripcion: {{ $product->content }}</p>
        </div>
        <div class="col-5">
            <form action="{{ route("product.image",$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Agregar Imagenes</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <div class="col">
                                <input type="file"  name="image" id="image" class="custom-file-input" accept="image/*" onchange="preview_image(event)">
                                <label class="custom-file-label" for="file">Agregar imagenes</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <br>
                    </div>
                    <div class="col-5">
                        <img class="output_image" id="output_image"/>
                    </div>

                    <div class="col-5">
                        <br>
                    </div>
                    <div class="col-5">
                        <div class="input-group-append">
                            <input type="submit" class="btn aceptar--btn" value="Cargar Imagen">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type='text/javascript'>
    function preview_image(event)
    {
     var reader = new FileReader();
     reader.onload = function()
     {
      var output = document.getElementById('output_image');
      output.src = reader.result;
     }
     reader.readAsDataURL(event.target.files[0]);
    }
    </script>

@endsection
