<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <h1>Su compra se ha realizado correctamente</h1>
                <h2>resumen</h2>
            @foreach ($compra as $item)
                {{$item}}
                {{$item->name}}

            @endforeach

            </div>
        </div>
    </div>
</div>
