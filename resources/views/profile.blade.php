@extends('dashboard.master')
@section('content')

<body>



    @if ($user->id == auth()->id())
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

    @endif


</body>
@endsection


