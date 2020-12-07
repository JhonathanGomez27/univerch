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

{{-- <div class="container-facultades">
    <div class="container-fac">
        <a style="text-decoration: none" href="{{route('facultad.create')}}" class="btn-flotante">Agregar</a>
        <div class="row mb-2">
                @foreach ($facultades as $facultad)
                    <div class="col-4" style="margin-bottom: 20px">
                        @include('dashboard.facultad.show')
                    </div>
                @endforeach
        </div>
    </div>
</div> --}}
{{$pqrs ->links()}}


@endsection
