<nav class="nevbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fas fa-bars"></i>
    </span>
    <a href="#" class="logo" style="font-weight: bolder"><img src="{{asset('img/tienda-en-linea.png')}}" width="45" height="45" alt=""> UNIVERCH</a>
    <ul class="main-nav" id="js-menu">
        <li>
            <a href="{{url('../../profile',auth()->id())}}" class="nav-links" style="font-weight: bold"><img src="{{asset('img/user.png')}}" width="30" height="30" alt=""> Perfil</a>
        </li>
        <li>
            <a href="#" class="nav-links" style="font-weight: bold">Inicio</a>
        </li>
        <li>
        <a href="{{url('../dashboard/product')}}" class="nav-links" style="font-weight: bold">Publicaciones</a>
        </li>
        <li>
        <a href="{{route('cart.checkout')}}" class="nav-links" style="font-weight: bold"><img src="{{asset('img/cart.png')}}" width="30" height="30" alt=""> Carrito</a>
        </li>
        <li>
            <a style="visibility: hidden" >hola</a>
        </li>
        <li>
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Salir</a>
            </div>
          </li>
    </ul>
</nav>
