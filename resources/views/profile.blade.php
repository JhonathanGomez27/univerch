@extends('dashboard.master')
@section('content')
    <div class="container-profile">
        <div class="profile-cont">
        @if ($user->id == auth()->id())
            <div class="containerrrrr">
                <header>
                <i class="" aria-hidden="true"></i>
                </header>
                <main>
                <div class="row">
                    <div class="left col-lg-4">
                    <div class="photo-left">
                        <img class="photo" src="https://i.pinimg.com/originals/19/b8/d6/19b8d6e9b13eef23ec9c746968bb88b1.jpg"/>
                        <div class="active"></div>
                    </div>
                    <h4 class="name">{{ $user->name }}</h4>
                    <p class="info">{{ $user->email }}</p>
                    <div class="stats row">
                        <div class="stat col-xs-4" style="padding-right: 50px;">
                        <p class="number-stat">3,619</p>
                        <p class="desc-stat">Unidades Vendidas</p>
                        </div>
                        <div class="stat col-xs-4">
                        <p class="number-stat">42</p>
                        <p class="desc-stat">Publicaciones</p>
                        </div>
                    </div>
                    </div>
                    <div class="right col-lg-8">
                        <br>
                        <br>
                        <div class="container-contrasenas">
                            <p style="font-size:20px">Cambiar Contraseña: </p>
                            <form>
                                <div class="form-group col-7">
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group col-7">
                                  <input type="password" class="form-control" id="password" name="password"  placeholder="Confirm Password">
                                </div>
                                <div class="form-group col-7">
                                    <input class="btn save-pass--btn" type="submit" id="guardar" value="Cambiar Contraseña">
                                </div>
                              </form>
                        </div>

                        <div class="container-direccion">
                            <p style="font-size:20px">Cambiar Direccion: </p>
                            <form>
                                <div class="form-group col-7">
                                  <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                                </div>
                                <div class="form-group col-7">
                                    <input class="btn save-pass--btn" type="submit" id="guardar" value="Cambiar Direccion">
                                </div>
                              </form>
                        </div>
                    </div>
                </main>
            </div>
        @else
        <div class="containerrrrr">
            <header>
            <i class="" aria-hidden="true"></i>
            </header>
            <main>
            <div class="row">
                <div class="left col-lg-4">
                <div class="photo-left">
                    <img class="photo" src="https://i.pinimg.com/originals/19/b8/d6/19b8d6e9b13eef23ec9c746968bb88b1.jpg"/>
                    <div class="active"></div>
                </div>
                <h4 class="name">{{ $user->name }}</h4>
                <p class="info">{{ $user->email }}</p>
                <div class="stats row">
                    <div class="stat col-xs-4" style="padding-right: 50px;">
                    <p class="number-stat">3,619</p>
                    <p class="desc-stat">Unidades Vendidas</p>
                    </div>
                    <div class="stat col-xs-4">
                    <p class="number-stat">42</p>
                    <p class="desc-stat">Publicaciones</p>
                    </div>
                </div>
                </div>
                <div class="right col-lg-8">

                </div>
            </main>
        </div>
        @endif

        </div>
    </div>
    {{-- @if ($user->id == auth()->id())
        <h1>Mi Perfil</h1>
        <h4>nombre</h4>
        <h5 class="card-title"> {{ $user->name }}</h5>
        <h4>correo</h4>
        <h5 class="card-title"> {{ $user->email }}</h5>

    @else
        <h2>Perfil Usuario</h2>
        <h4>nombre</h4>
        <h5 class="card-title"> {{ $user->name }}</h5>
        <h4>correo</h4>
        <h5 class="card-title"> {{ $user->email }}</h5>

    @endif --}}
@endsection


