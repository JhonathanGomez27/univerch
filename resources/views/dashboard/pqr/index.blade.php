@extends('dashboard.master')
@section('content')

<div class="row mb-2">
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


@endsection
