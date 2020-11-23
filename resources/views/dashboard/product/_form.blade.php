@csrf

<div class="row mb-2">
    <div class="col-5">

        <div class="form-group">
            <label for="title">Titulo</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $product->title) }}">
        </div>
        <div class="form-group">
            <label for="content">Descripción</label>
            <textarea class="form-control" name="content" id="content" rows="5">
            {{ old('content', $product->content) }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <div class="input-group mb-3">

                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="number" class="form-control" id="precio" name="precio"
                    aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" name="estado" id="estado">
                @include('dashboard.partials.option-estado',['val' => $product->estado])
            </select>
        </div>


    </div>
    <div class="col-2">

    </div>
    <div class="col-5">
        <div class="form-group">
            <label for="facultad_id">Facultad</label>

            <select class="form-control" name="facultad_id" id="facultad_id">
                @foreach ($facultades as   $title=>$id)
                    <option {{  $product-> facultad_id == $id ?'selected="selected"':''}}  value="{{ $id }}">{{ $title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file"
                        aria-describedby="agregar">
                    <label class="custom-file-label" for="file">Agregar imagenes</label>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="agregar">Guardar</button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-2">

                <div class="input-group-prepend">
                    <a href="{{URL::previous()}}" class="btn btn-outline-secondary" >Regresar</a>
                </div>
                <div class="col-2"></div>
                <input class="btn btn-primary" type="submit" id="guardar" value="Guardar">
            </div>
        </div>
    </div>

