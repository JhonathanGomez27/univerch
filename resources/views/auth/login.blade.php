@extends('layouts.main', ['class' => 'off-canvas-sidebar','activePage' => 'login', 'title' => __('')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center colaq">
            <h4 class="card-title"><strong class="polsd">{{ __('Inicia Sesion') }}</strong></h4>
            <div class="social-line">
            <a href="{{url('login/facebook')}}" class="btn btn-just-icon btn-link btn-gray">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="{{url('login/google')}}" class="btn btn-just-icon btn-link btn-gray">
                <i class="fa fa-google "></i>
              </a>
              <a href="{{url('login/github')}}" class="btn btn-just-icon btn-link btn-gray">
                <i class="fa fa-github"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Correo Electronico...') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Contraseña...') }}"  required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg" style="color:rgb(97, 210, 255)">{{ __('Iniciar Sesion') }}</button>
          </div>
        </div>
      </form>
      <a href="{{ route('register') }}" class="text-light">
        <small>{{ __('No tienes una cuenta? Registrate en UNIVERCH') }}</small>
    </a>
    </div>
  </div>
</div>
@endsection
