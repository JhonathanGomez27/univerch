@csrf

<div class="row mb-2">
    <div class="col-6">

        <div class="form-group">
            <label for="title">Titulo</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $facultad->title) }}">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="content">Descripción</label>
            <textarea class="form-control" name="content" id="content" rows="5">
            {{ old('content', $facultad->content) }}
            </textarea>
        </div> 
    </div> 
    <div class="col-4">
        <input class="btn btn-primary" type="submit" value="Aceptar">
        <a href="{{route('facultad.index')}}" class="btn btn-outline-secondary">Regresar</a>
    </div>
</div>    
