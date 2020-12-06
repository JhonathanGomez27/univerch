@extends('dashboard.master')
@section('content')

@include('dashboard.partials.validation-error')

    <form action="{{ route('pqr.update',$pqr->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="form-create">
            <div class="row mb-2">
                <div class="col-6">


                    <div class="form-group">
                        <input type="text" class="form__input" name="title" id="title" placeholder="Titulo" value="{{ old('title', $pqr->title) }}" readonly />
                        <label for="name" class="form__label">Titulo</label>
                    </div>
                    <div class="form-group">
                        <label for="typepqr">Tipo</label>
                        <select class="form-control" style="background: transparent; border: none;
                        outline: none;
                        width: 100%;
                        border-bottom: 0.1rem solid rgb(208, 128, 255);" name="typepqr" id="typepqr" disabled>
                            @include('dashboard.partials.option-pqr',['val' => $pqr->type,'option'=>'private'])
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">

                            <div class="input-group-prepend col-6">
                                <div class="col-8">
                                    <a href="{{route('pqr.index')}}" class="btn btn-outline-danger" >Regresar</a>
                                </div>
                            </div>
                            @if ($pqr->status=='review')
                                <div class="col-6">
                                    <input class="btn btn-info" type="submit" id="guardar" value="Guardar respuesta">
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <div class="form-group">
                        <textarea readonly class="form__input" name="content" placeholder="Descripcion" id="content" rows="5">
                        {{ old('content', $pqr->content) }}
                        </textarea>
                        <label for="content" class="form__label">Solicitud</label>
                    </div>
                    @if ($pqr->status=='review' ||$pqr->status==null)
                        <div class="form-group">
                            <textarea class="form__input" name="response" placeholder="Respuesta de admin" id="response" rows="5"></textarea>
                            <label for="response" class="form__label">Respuesta de solicitud</label>
                        </div>
                    @else
                        <div class="form-group">
                            <textarea readonly class="form__input" name="response" placeholder="Respuesta de admin" id="response" rows="5"></textarea>
                            <label for="response" class="form__label">Respuesta de solicitud</label>
                        </div>
                    @endif
                    <input type="hidden" name="status" value ="finished">
                </div>
        </div>
    </form>
    
@endsection