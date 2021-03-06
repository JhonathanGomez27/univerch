@extends('dashboard.master')
@section('content')

@include('dashboard.partials.validation-error')



<div class="form-show">
        

    <section class="product">
        <div class="product__photo">
            <div class="photo-container">
                <div class="photo-main">
                    @foreach ($product->image as $image)
                            <img src="{{asset('storage').'/'.'images'.'/'.$product->image->first()->image}}" alt="Card image cap">
                    @endforeach
                </div>
            </div>
        </div>
        <div class="product__info">
            <div class="title">
                <h1>{{$product->title}}</h1>
                <span>{{$product->user->name}}</span>
            </div>
            <div class="price">
                $ <span>{{$product->precio}}</span>
            </div>
            <div class="description">
                <h3>{{$product->facultad->title}}</h3>
                <ul>
                    <li>{{$product->content}}</li>
                </ul>
            </div>
            <button class="buy--btn">ADD TO CART</button>
        </div>
    </section>
</div>

<div class="otrp">

</div>


@endsection


