@extends('adminlte::page')
@section('content')

<div class="container-facultades">
    <div class="container-fac">
        <a style="text-decoration: none" href="{{route('facultad.create')}}" class="btn btn-outline-success">Agregar</a>
        <div class="row mb-2">
                @foreach ($facultades as $facultad)
                    <div class="col-4" style="margin-bottom: 20px">
                        @include('dashboard.facultad.show')
                    </div>
                @endforeach
        </div>
    </div>
</div>
@endsection


{{-- <div class="row mb-2">
    @foreach ($facultades as $facultad)
        <div class="col-4">
            @include('dashboard.facultad.show')
        </div>
        <div class="col-2">
        </div>
    @endforeach
</div>
{{$facultades ->links()}} --}}
