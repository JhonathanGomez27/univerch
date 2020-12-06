@extends('dashboard.master')
@section('content')

<div class="row mb-2">
    @if ($tipo!=1)
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Crear una PQR</h5> 
                    <a href="{{route('pqr.create')}}" class="btn btn-outline-primary">Nueva PQR</a>
                </div>
            </div>
        </div>
  @endif
  <div class="col-2">
  </div>    
    @foreach ($pqrs as $pqr)
        <div class="col-4">
            @include('dashboard.pqr.show')
        </div>
        <div class="col-2">
        </div>     
    @endforeach
</div>
{{$pqrs ->links()}}

 
@endsection
