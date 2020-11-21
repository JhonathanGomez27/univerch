@extends('dashboard.master')
@section('content')

<div class="row mb-2">
  <div class="col-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Crear nueva facultad</h5> 
            <a href="{{route('facultad.create')}}" class="btn btn-outline-primary">Agregar</a>
               
        </div>
      </div>
  </div>
  <div class="col-2">
  </div>    
    @foreach ($facultades as $facultad)
        <div class="col-4">
            @include('dashboard.facultad.show')
        </div>
        <div class="col-2">
        </div>     
    @endforeach
</div>
{{$facultades ->links()}}

 
@endsection
