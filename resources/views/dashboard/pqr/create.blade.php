@extends('dashboard.master')
@section('content')

    <form action="{{ route('pqr.store') }}" method="POST">
        @csrf
        <div class="form-create">
            <div class="row mb-2">
                <div class="col-6">


                    <div class="form-group">
                        <input type="text" class="form__input" name="title" id="title" placeholder="Titulo" value="{{ old('title', $pqr->title) }}"  />
                        <label for="name" class="form__label">Titulo</label>
                    </div>
                    <div class="form-group">
                        <label for="typepqr">Tipo</label>
                        <select readonly class="form-control" style="background: transparent; border: none;
                        outline: none;
                        width: 100%;
                        border-bottom: 0.1rem solid rgb(208, 128, 255);" name="type" id="typepqr">
                            @include('dashboard.partials.option-pqr',['val' => $pqr->estado])
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">

                            <div class="input-group-prepend col-6">
                                <div class="col-8">
                                    <a href="{{route('product.index')}}" class="btn btn-outline-danger" >Regresar</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <input class="btn btn-info" type="submit" id="guardar" value="Guardar">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <textarea class="form__input" name="content" placeholder="Descripcion" id="content" rows="5">{{ old('content', $pqr->content) }}</textarea>
                        <label for="content" class="form__label">Describe tu solicitud</label>
                    </div>
                </div>


        </div>
    </form>
@endsection
