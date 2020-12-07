@extends('dashboard.master')
@section('content')

<div class="row sm-3">
  <div class="col-4">
    <div >
        <div class>
            <h5 class>Mis compras</h5>


        </div>
      </div>
  </div>
  <div class="col-2">
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Nombre</th>

            <th></th>
        </thead>
            <tbody>

                    @foreach ($orders as $order)
                    <tr>

                    <td>{{$order}}</td>
                     </tr>
                    @endforeach

             </tbody>

</div>
</div>





@endsection
