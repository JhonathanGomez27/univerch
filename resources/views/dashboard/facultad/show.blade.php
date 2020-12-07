<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$facultad->title}}</h5>
      <p class="card-text">{{ $facultad->content }}</p>
      <a class="card-link btn btn-outline-primary" href="{{route('facultad.edit',$facultad->id)}}" class="btn btn-outline-primary">Editar</a>
        <button  data-toggle="modal" data-target="#deleteModal" data-id="{{$facultad->id}}" class="btn btn-outline-danger card-link">
            Eliminar
        </button>
    </div>
  </div>

{{-- <div class="card">
    <div class="card-body">
        <h5 class="card-title">{{$facultad->title}}</h5>
        <h6 class="card-text">{{ $facultad->content }}</h6>
        <a href="{{route('facultad.edit',$facultad->id)}}" class="btn btn-outline-primary">Editar</a>
        <button data-toggle="modal" data-target="#deleteModal" data-id="{{$facultad->id}}" class="btn btn-outline-danger">
            Eliminar
        </button>
    </div>
</div>
 --}}
 <!-- Modal -->
 <div class="modal fade" id="deleteModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Seguro desea eliminar la facultad, no se podra recuperar la información</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form action="{{route('facultad.destroy',0)}}" id="formDelete" data-action="{{route('facultad.destroy',0)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  <script>
      window.onload = function(){
        $('#deleteModal').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget)
        let id = button.data('id')
        let action = $('#formDelete').attr('data-action').slice(0)
        action += id
        $('#formDelete').attr('action',action)
        let modal = $(this)
        modal.find('.modal-title').text('Vas a eliminar la publicación número' + id)
        })
      }

  </script>
