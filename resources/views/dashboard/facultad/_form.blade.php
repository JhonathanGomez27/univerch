@csrf
<div class="form-create">
    <div class="createProdcuts">
        <div class="row mb-2">
            <div class="col-5">


                <div class="form-group">
                    <input type="text" class="form__input" name="title" id="title" placeholder="Titulo" value="{{ old('title', $facultad->title) }}" required  />
                    <label for="title" class="form__label">Titulo</label>
                </div>

                <div class="form-group">
                    <div class="input-group mb-2">

                        <div class="input-group-prepend">
                            <a href="{{route('facultad.index')}}" class="btn volver--btn" >Regresar</a>
                        </div>
                        <div class="col-2"></div>
                        <input class="btn aceptar--btn" type="submit" value="Guardar">


                    </div>
                </div>

            </div>
            <div class="col-2">

            </div>
            <div class="col-5">

                <div class="form-group">
                    <textarea class="form__input" name="content" placeholder="Descripcion" id="content" rows="5">{{ old('content', $facultad->content) }}</textarea>
                    <label for="content" class="form__label">Descripción</label>
                </div>
            </div>
    </div>
</div>
