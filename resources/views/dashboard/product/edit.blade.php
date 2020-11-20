@extends('dashboard.master')
@section('content')

@include('dashboard.partials.validation-error')

    <form action="{{ route('product.update',$post->id)}}" method="post">
        @method('PUT')
        @include('dashboard.product._form')
    </form>
    
@endsection