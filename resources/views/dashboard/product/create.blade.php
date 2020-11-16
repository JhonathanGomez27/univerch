@extends('dashboard.master')
@section('content')
    <form action="{{ route('product.store') }}" method="POST">
        @include('dashboard.product._form')
    </form>
@endsection
