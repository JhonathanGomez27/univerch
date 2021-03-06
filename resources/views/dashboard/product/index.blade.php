@extends('dashboard.master')
@section('content')

<div class="contenedorPublicaciones">
    <a style="text-decoration: none" href="{{route('product.create')}}" class="btn-flotante">Agregar</a>
    <div class="row mb-2">
            @if (count(Cart::getContent()))
                {{count(Cart::getContent())}}
            @endif
        @foreach ($products as $product)
            <div class="col-4" style="margin-top: 45px">
                <ul>

                    @if (count($product->image) > 0)
                        <li class="booking-card" style="background-image: url({{asset('storage').'/'.'images'.'/'.$product->image->first()->image}})">
                    @else
                        <li class="booking-card" style="background-image: url({{asset('storage').'/'.'images'.'/'.'productovacio.png'}})">
                    @endif
                      <div class="book-container">
                        <div class="content">
                          <button class="btn"><a href="{{route('product.show',$product->id)}}" >Mas información</a></button>
                        </div>
                      </div>
                      <div class="informations-container">
                        <h2 class="title">{{$product->title}}</h2>
                        <p class="sub-title">Facultad: {{ $product->facultad->title }}</p>
                        <p class="price"><svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
                          </svg> $ {{$product->precio}}</p>
                        <div class="more-information">
                          <div class="info-and-date-container">
                            <div class="box info">
                                <a href="{{url('../../profile',$product->user->id)}}">
                                    <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
                                    </svg>
                                    <p>Visitar el Perfil del vendedor</p>
                                </a>
                                <p style="visibility: hidden">muchas otras</p>
                            </div>
                            <div class="box date">
                                <a href="">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24pt" height="24pt" viewBox="0 0 24 24" version="1.1">
                                      <g id="surface1">
                                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(40%,80%,100%);fill-opacity:1;" d="M 19.78125 20.4375 L 6.421875 20.4375 C 5.257812 20.4375 4.3125 19.492188 4.3125 18.328125 C 4.3125 17.164062 5.257812 16.21875 6.421875 16.21875 L 8.53125 16.21875 L 7.265625 17.625 L 6.421875 17.625 C 6.035156 17.625 5.71875 17.941406 5.71875 18.328125 C 5.71875 18.714844 6.035156 19.03125 6.421875 19.03125 L 19.78125 19.03125 Z M 19.78125 20.4375 "/>
                                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(34.901961%,67.058824%,100%);fill-opacity:1;" d="M 13.453125 19.03125 L 19.78125 19.03125 L 19.78125 20.4375 L 13.453125 20.4375 Z M 13.453125 19.03125 "/>
                                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(40%,80%,100%);fill-opacity:1;" d="M 5.082031 7.78125 L 4.453125 4.96875 L 0 4.96875 L 0 3.5625 L 5.578125 3.5625 L 6.796875 9.015625 Z M 5.082031 7.78125 "/>
                                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(40%,80%,100%);fill-opacity:1;" d="M 16.472656 8.023438 L 16.261719 7.78125 L 5.082031 7.78125 L 7.265625 17.625 L 19.621094 17.625 L 22.101562 8.035156 C 21.621094 8.15625 18.773438 10.664062 16.472656 8.023438 Z M 20.011719 10.503906 L 19.625 12 L 16.328125 12 L 16.503906 9.855469 C 17.535156 10.484375 18.804688 10.734375 20.011719 10.503906 Z M 11.992188 12 L 11.757812 9.1875 L 15.148438 9.1875 L 14.914062 12 Z M 14.796875 13.40625 L 14.5625 16.21875 L 12.34375 16.21875 L 12.109375 13.40625 Z M 10.34375 9.1875 L 10.578125 12 L 7.457031 12 L 6.832031 9.1875 Z M 7.769531 13.40625 L 10.695312 13.40625 L 10.929688 16.21875 L 8.394531 16.21875 Z M 15.976562 16.21875 L 16.210938 13.40625 L 19.261719 13.40625 L 18.535156 16.21875 Z M 15.976562 16.21875 "/>
                                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(34.901961%,67.058824%,100%);fill-opacity:1;" d="M 16.472656 8.023438 L 16.261719 7.78125 L 13.453125 7.78125 L 13.453125 9.1875 L 15.148438 9.1875 L 14.914062 12 L 13.453125 12 L 13.453125 13.40625 L 14.796875 13.40625 L 14.5625 16.21875 L 13.453125 16.21875 L 13.453125 17.625 L 19.621094 17.625 L 22.101562 8.035156 C 21.621094 8.15625 18.773438 10.664062 16.472656 8.023438 Z M 18.535156 16.21875 L 15.976562 16.21875 L 16.210938 13.40625 L 19.261719 13.40625 Z M 20.011719 10.503906 L 19.625 12 L 16.328125 12 L 16.503906 9.855469 C 17.535156 10.484375 18.804688 10.734375 20.011719 10.503906 Z M 20.011719 10.503906 "/>
                                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(40%,31.764706%,31.764706%);fill-opacity:1;" d="M 9.234375 23.25 C 8.070312 23.25 7.125 22.304688 7.125 21.140625 C 7.125 19.976562 8.070312 19.03125 9.234375 19.03125 C 10.398438 19.03125 11.34375 19.976562 11.34375 21.140625 C 11.34375 22.304688 10.398438 23.25 9.234375 23.25 Z M 9.234375 23.25 "/>
                                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(30.196078%,20.784314%,20.784314%);fill-opacity:1;" d="M 16.265625 23.25 C 15.101562 23.25 14.15625 22.304688 14.15625 21.140625 C 14.15625 19.976562 15.101562 19.03125 16.265625 19.03125 C 17.429688 19.03125 18.375 19.976562 18.375 21.140625 C 18.375 22.304688 17.429688 23.25 16.265625 23.25 Z M 16.265625 23.25 "/>
                                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(62.745098%,90.196078%,36.078431%);fill-opacity:1;" d="M 19.078125 10.59375 C 16.289062 10.59375 14.15625 8.316406 14.15625 5.671875 C 14.15625 2.957031 16.363281 0.75 19.078125 0.75 C 21.792969 0.75 24 2.957031 24 5.671875 C 24 8.453125 21.742188 10.59375 19.078125 10.59375 Z M 19.078125 10.59375 "/>
                                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,96.862745%,90.196078%);fill-opacity:1;" d="M 9.9375 21.140625 C 9.9375 21.527344 9.621094 21.84375 9.234375 21.84375 C 8.847656 21.84375 8.53125 21.527344 8.53125 21.140625 C 8.53125 20.753906 8.847656 20.4375 9.234375 20.4375 C 9.621094 20.4375 9.9375 20.753906 9.9375 21.140625 Z M 9.9375 21.140625 "/>
                                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,91.764706%,80%);fill-opacity:1;" d="M 16.96875 21.140625 C 16.96875 21.527344 16.652344 21.84375 16.265625 21.84375 C 15.878906 21.84375 15.5625 21.527344 15.5625 21.140625 C 15.5625 20.753906 15.878906 20.4375 16.265625 20.4375 C 16.652344 20.4375 16.96875 20.753906 16.96875 21.140625 Z M 16.96875 21.140625 "/>
                                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(47.45098%,80%,32.156863%);fill-opacity:1;" d="M 24 5.671875 C 24 2.957031 21.792969 0.75 19.078125 0.75 L 19.078125 10.59375 C 21.742188 10.59375 24 8.453125 24 5.671875 Z M 24 5.671875 "/>
                                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,96.862745%,90.196078%);fill-opacity:1;" d="M 21.1875 4.96875 L 19.78125 4.96875 L 19.78125 3.5625 L 18.375 3.5625 L 18.375 4.96875 L 16.96875 4.96875 L 16.96875 6.375 L 18.375 6.375 L 18.375 7.78125 L 19.78125 7.78125 L 19.78125 6.375 L 21.1875 6.375 Z M 21.1875 4.96875 "/>
                                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,91.764706%,80%);fill-opacity:1;" d="M 19.078125 3.5625 L 19.078125 7.78125 L 19.78125 7.78125 L 19.78125 6.375 L 21.1875 6.375 L 21.1875 4.96875 L 19.78125 4.96875 L 19.78125 3.5625 Z M 19.078125 3.5625 "/>
                                      </g>
                                      </svg>

                                      <form action="{{route('cart.add')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="producto_id" value="{{$product->id}}">

                                        <input type="submit" name="btn"  class="btn btn-success" value="ADD TO CART">
                                    </form>
                                </a>

                            </div>
                          </div>
                          <p class="disclaimer"></p>
                          </div>
                      </div>
                    </li>
                  </ul>

            </div>
        @endforeach
    </div>

</div>
@endsection


