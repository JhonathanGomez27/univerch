@extends('dashboard.master')
@section('content')

@include('dashboard.partials.validation-error')

    <form action="{{ route('facultad.update',$facultad->id)}}" method="post">
        @method('PUT')
        @include('dashboard.facultad._form')
    </form>
    
@endsection