@extends('dashboard.master')
@section('content')
    <form action="{{ route('facultad.store') }}" method="POST">
        @include('dashboard.facultad._form')
    </form>
@endsection
