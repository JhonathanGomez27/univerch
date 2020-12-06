@csrf
<div class="form-create">
    <div class="row mb-2">
        <div class="col-5">


            <div class="form-group">
                <input type="text" class="form__input" name="title" id="title" placeholder="Titulo" value="{{ old('title', $product->title) }}" required  />
                <label for="name" class="form__label">Titulo</label>
            </div>

            <div class="form-group">
                <textarea class="form__input" name="content" placeholder="Descripcion" id="content" rows="5">{{ old('content', $product->content) }}</textarea>
                <label for="content" class="form__label">Descripción</label>
            </div>

            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span style="background: transparent; border:none;" class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16pt" height="16pt" viewBox="0 0 16 16" version="1.1">
                            <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(70.588235%,86.666667%,49.803922%);fill-opacity:1;" d="M 15.5 4 L 13 6.5 L 12.636719 6.5 C 12.710938 6.261719 12.75 6.011719 12.75 5.75 C 12.75 4.371094 11.628906 3.25 10.25 3.25 C 9.679688 3.25 9.15625 3.441406 8.738281 3.761719 L 12 0.5 Z M 15.5 4 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(70.588235%,86.666667%,49.803922%);fill-opacity:1;" d="M 6 6.5 L 8.261719 4.238281 C 7.941406 4.65625 7.75 5.179688 7.75 5.75 C 7.75 6.011719 7.789062 6.261719 7.863281 6.5 Z M 6 6.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(98.823529%,84.313725%,43.921569%);fill-opacity:1;" d="M 9.5 6.5 L 7.863281 6.5 C 7.789062 6.261719 7.75 6.011719 7.75 5.75 C 7.75 5.179688 7.941406 4.65625 8.261719 4.238281 L 8.738281 3.761719 C 9.15625 3.441406 9.679688 3.25 10.25 3.25 C 11.628906 3.25 12.75 4.371094 12.75 5.75 C 12.75 6.011719 12.710938 6.261719 12.636719 6.5 Z M 9.5 6.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(70.588235%,86.666667%,49.803922%);fill-opacity:1;" d="M 4.75 14.75 L 5 14.5 L 15.5 14.5 L 15.5 15.5 L 0.5 15.5 L 0.5 14.5 L 4.5 14.5 Z M 4.75 14.75 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(62.745098%,83.137255%,40.784314%);fill-opacity:1;" d="M 4.5 14.5 L 0.5 14.5 L 0.5 13.5 L 3.5 13.5 Z M 4.5 14.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(62.745098%,83.137255%,40.784314%);fill-opacity:1;" d="M 15.5 14.5 L 5 14.5 L 6 13.5 L 10.25 13.5 L 10.5 13.75 L 10.75 13.5 L 15.5 13.5 Z M 15.5 14.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(54.901961%,75.686275%,32.156863%);fill-opacity:1;" d="M 5 14.5 L 4.75 14.75 L 3.5 13.5 L 6 13.5 Z M 5 14.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(54.901961%,75.686275%,32.156863%);fill-opacity:1;" d="M 10.25 13.5 L 9.25 12.5 L 11.75 12.5 L 10.5 13.75 Z M 10.25 13.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(70.588235%,86.666667%,49.803922%);fill-opacity:1;" d="M 13 6.5 L 0.5 6.5 L 0.5 13.5 L 10.25 13.5 L 9.25 12.5 L 2.5 12.5 C 2.5 11.949219 2.050781 11.5 1.5 11.5 L 1.5 8.5 C 2.050781 8.5 2.5 8.050781 2.5 7.5 L 13.5 7.5 C 13.5 8.039062 13.925781 8.480469 14.460938 8.496094 C 14.476562 8.5 14.488281 8.5 14.5 8.5 L 14.5 11.5 C 13.949219 11.5 13.5 11.949219 13.5 12.5 L 11.75 12.5 L 10.75 13.5 L 15.5 13.5 L 15.5 6.5 Z M 13 6.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(90.196078%,91.372549%,92.941176%);fill-opacity:1;" d="M 2.5 7.5 L 8 7.5 C 6.621094 7.5 5.5 8.621094 5.5 10 C 5.5 11.378906 6.621094 12.5 8 12.5 L 2.5 12.5 C 2.5 11.949219 2.050781 11.5 1.5 11.5 L 1.5 8.5 C 2.050781 8.5 2.5 8.050781 2.5 7.5 Z M 2.5 7.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(90.196078%,91.372549%,92.941176%);fill-opacity:1;" d="M 8 12.5 C 9.378906 12.5 10.5 11.378906 10.5 10 C 10.5 8.621094 9.378906 7.5 8 7.5 L 13.5 7.5 C 13.5 8.039062 13.925781 8.480469 14.460938 8.496094 C 14.476562 8.5 14.488281 8.5 14.5 8.5 L 14.5 11.5 C 13.949219 11.5 13.5 11.949219 13.5 12.5 Z M 8 12.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(98.823529%,84.313725%,43.921569%);fill-opacity:1;" d="M 8 7.5 C 9.378906 7.5 10.5 8.621094 10.5 10 C 10.5 11.378906 9.378906 12.5 8 12.5 C 6.621094 12.5 5.5 11.378906 5.5 10 C 5.5 8.621094 6.621094 7.5 8 7.5 Z M 8 7.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 1.75 7.5 C 1.75 7.636719 1.636719 7.75 1.5 7.75 C 1.363281 7.75 1.25 7.636719 1.25 7.5 C 1.25 7.363281 1.363281 7.25 1.5 7.25 C 1.636719 7.25 1.75 7.363281 1.75 7.5 Z M 1.75 7.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 1.75 12.5 C 1.75 12.636719 1.636719 12.75 1.5 12.75 C 1.363281 12.75 1.25 12.636719 1.25 12.5 C 1.25 12.363281 1.363281 12.25 1.5 12.25 C 1.636719 12.25 1.75 12.363281 1.75 12.5 Z M 1.75 12.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 14.75 7.5 C 14.75 7.636719 14.636719 7.75 14.5 7.75 C 14.363281 7.75 14.25 7.636719 14.25 7.5 C 14.25 7.363281 14.363281 7.25 14.5 7.25 C 14.636719 7.25 14.75 7.363281 14.75 7.5 Z M 14.75 7.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 8 9.25 C 8.136719 9.25 8.25 9.363281 8.25 9.5 L 8.75 9.5 C 8.75 9.175781 8.539062 8.898438 8.25 8.796875 L 8.25 8.25 L 7.75 8.25 L 7.75 8.75 L 7.25 8.75 L 7.25 9.5 C 7.25 9.914062 7.585938 10.25 8 10.25 C 8.136719 10.25 8.25 10.363281 8.25 10.5 L 8.25 10.75 L 8 10.75 C 7.863281 10.75 7.75 10.636719 7.75 10.5 L 7.25 10.5 C 7.25 10.824219 7.460938 11.101562 7.75 11.203125 L 7.75 11.75 L 8.25 11.75 L 8.25 11.25 L 8.75 11.25 L 8.75 10.5 C 8.75 10.085938 8.414062 9.75 8 9.75 C 7.863281 9.75 7.75 9.636719 7.75 9.5 L 7.75 9.25 Z M 8 9.25 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 9.75 10 C 9.75 10.136719 9.636719 10.25 9.5 10.25 C 9.363281 10.25 9.25 10.136719 9.25 10 C 9.25 9.863281 9.363281 9.75 9.5 9.75 C 9.636719 9.75 9.75 9.863281 9.75 10 Z M 9.75 10 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 6.75 10 C 6.75 10.136719 6.636719 10.25 6.5 10.25 C 6.363281 10.25 6.25 10.136719 6.25 10 C 6.25 9.863281 6.363281 9.75 6.5 9.75 C 6.636719 9.75 6.75 9.863281 6.75 10 Z M 6.75 10 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 14.75 12.5 C 14.75 12.636719 14.636719 12.75 14.5 12.75 C 14.363281 12.75 14.25 12.636719 14.25 12.5 C 14.25 12.363281 14.363281 12.25 14.5 12.25 C 14.636719 12.25 14.75 12.363281 14.75 12.5 Z M 14.75 12.5 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 12 2.269531 L 12.410156 2.675781 L 12.761719 2.324219 L 12 1.5625 L 11.238281 2.324219 L 11.589844 2.675781 Z M 12 2.269531 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 13.675781 4.761719 L 14.4375 4 L 13.675781 3.238281 L 13.324219 3.589844 L 13.730469 4 L 13.324219 4.410156 Z M 13.675781 4.761719 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 15.851562 4 L 12 0.148438 L 5.898438 6.25 L 0.25 6.25 L 0.25 15.75 L 15.75 15.75 L 15.75 6.25 L 13.601562 6.25 Z M 10.5 5.648438 L 10.355469 5.5 C 10.285156 5.433594 10.25 5.34375 10.25 5.25 C 10.25 5.15625 10.285156 5.066406 10.351562 5 L 10.5 4.851562 L 10.894531 5.25 C 10.964844 5.316406 11 5.40625 11 5.5 C 11 5.59375 10.964844 5.683594 10.898438 5.75 L 10.824219 5.824219 L 11.175781 6.175781 L 11.25 6.101562 C 11.410156 5.941406 11.5 5.726562 11.5 5.5 C 11.5 5.320312 11.445312 5.152344 11.34375 5.011719 L 11.675781 4.675781 L 11.324219 4.324219 L 11 4.648438 L 10.5 4.148438 L 10 4.648438 C 9.839844 4.808594 9.75 5.023438 9.75 5.25 C 9.75 5.476562 9.839844 5.691406 10 5.851562 L 10.144531 6 C 10.214844 6.066406 10.25 6.15625 10.25 6.25 L 9.605469 6.25 C 9.535156 6.183594 9.5 6.09375 9.5 6 C 9.5 5.90625 9.535156 5.816406 9.601562 5.75 L 9.675781 5.675781 L 9.324219 5.324219 L 9.25 5.398438 C 9.089844 5.558594 9 5.773438 9 6 C 9 6.085938 9.015625 6.167969 9.042969 6.25 L 8.0625 6.25 C 8.023438 6.085938 8 5.917969 8 5.75 C 8 5.257812 8.15625 4.792969 8.453125 4.398438 L 8.898438 3.953125 C 9.292969 3.65625 9.757812 3.5 10.25 3.5 C 11.492188 3.5 12.5 4.507812 12.5 5.75 C 12.5 5.917969 12.472656 6.085938 12.4375 6.25 L 10.75 6.25 C 10.75 6.023438 10.660156 5.808594 10.5 5.648438 Z M 15.148438 4 L 12.964844 6.179688 C 12.988281 6.039062 13 5.894531 13 5.75 C 13 4.234375 11.765625 3 10.25 3 C 10.105469 3 9.960938 3.011719 9.820312 3.035156 L 12 0.851562 Z M 7.535156 5.320312 C 7.511719 5.460938 7.5 5.605469 7.5 5.75 C 7.5 5.917969 7.515625 6.085938 7.546875 6.25 L 6.601562 6.25 Z M 5.75 10 C 5.75 8.757812 6.757812 7.75 8 7.75 C 9.242188 7.75 10.25 8.757812 10.25 10 C 10.25 11.242188 9.242188 12.25 8 12.25 C 6.757812 12.25 5.75 11.242188 5.75 10 Z M 6.421875 12.25 L 2.726562 12.25 C 2.625 11.761719 2.238281 11.375 1.75 11.273438 L 1.75 8.726562 C 2.238281 8.625 2.625 8.238281 2.726562 7.75 L 6.421875 7.75 C 5.714844 8.246094 5.25 9.070312 5.25 10 C 5.25 10.929688 5.714844 11.753906 6.421875 12.25 Z M 9.578125 12.25 C 10.285156 11.753906 10.75 10.929688 10.75 10 C 10.75 9.070312 10.285156 8.246094 9.578125 7.75 L 13.273438 7.75 C 13.375 8.238281 13.761719 8.625 14.25 8.726562 L 14.25 11.273438 C 13.761719 11.375 13.375 11.761719 13.273438 12.25 Z M 11.148438 12.75 L 10.5 13.398438 L 9.851562 12.75 Z M 10.5 14.101562 L 10.851562 13.75 L 15.25 13.75 L 15.25 14.25 L 5.601562 14.25 L 6.101562 13.75 L 10.148438 13.75 Z M 4.75 14.398438 L 4.101562 13.75 L 5.398438 13.75 Z M 3.398438 13.75 L 3.898438 14.25 L 0.75 14.25 L 0.75 13.75 Z M 0.75 15.25 L 0.75 14.75 L 4.398438 14.75 L 4.75 15.101562 L 5.101562 14.75 L 15.25 14.75 L 15.25 15.25 Z M 15.25 13.25 L 11.351562 13.25 L 11.851562 12.75 L 13.75 12.75 L 13.75 12.5 C 13.75 12.085938 14.085938 11.75 14.5 11.75 L 14.75 11.75 L 14.75 8.25 L 14.5 8.25 C 14.085938 8.25 13.75 7.914062 13.75 7.5 L 13.75 7.25 L 2.25 7.25 L 2.25 7.5 C 2.25 7.914062 1.914062 8.25 1.5 8.25 L 1.25 8.25 L 1.25 11.75 L 1.5 11.75 C 1.914062 11.75 2.25 12.085938 2.25 12.5 L 2.25 12.75 L 9.148438 12.75 L 9.648438 13.25 L 0.75 13.25 L 0.75 6.75 L 15.25 6.75 Z M 15.25 13.25 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 3 8.25 L 3.5 8.25 L 3.5 8.75 L 3 8.75 Z M 3 8.25 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 4 8.25 L 4.5 8.25 L 4.5 8.75 L 4 8.75 Z M 4 8.25 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 12.5 11.25 L 13 11.25 L 13 11.75 L 12.5 11.75 Z M 12.5 11.25 "/>
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 11.5 11.25 L 12 11.25 L 12 11.75 L 11.5 11.75 Z M 11.5 11.25 "/>
                            </g>
                            </svg></span>
                    </div>
                    <input type="number" class="form__input1" id="precio" name="precio" placeholder="Precio"
                        aria-label="Amount (to the nearest dollar)" value="{{old('content', $product->precio) }}">
                    <label for="precio" class="form__label">Precio</label>
                </div>

            </div>

            <div class="form-group">
                <div class="input-group mb-2">

                    <div class="input-group-prepend">
                        <a href="{{route('product.index')}}" class="btn btn-outline-danger" >Regresar</a>
                    </div>
                    <div class="col-2"></div>
                    <input class="btn btn-info" type="submit" id="guardar" value="Guardar">


                </div>
            </div>

        </div>
        <div class="col-2">

        </div>
        <div class="col-5">


            <div class="form-group">
                <label for="estado">Estado</label>
                <select class="form-control" style="background: transparent; border: none;
                outline: none;
                width: 100%;
                border-bottom: 0.1rem solid rgb(208, 128, 255);" name="estado" id="estado">
                    @include('dashboard.partials.option-estado',['val' => $product->estado])
                </select>
            </div>

            <div class="form-group">
                <label for="facultad_id">Facultad</label>

                <select class="form-control" style="background: transparent; border: none;
                outline: none;
                width: 100%;
                border-bottom: 0.1rem solid rgb(208, 128, 255);" name="facultad_id" id="facultad_id">
                    @foreach ($facultades as   $title=>$id)
                        <option {{  $product-> facultad_id == $id ?'selected="selected"':''}}  value="{{ $id }}">{{ $title }}</option>
                    @endforeach
                </select>
            </div>
        </div>


</div>

