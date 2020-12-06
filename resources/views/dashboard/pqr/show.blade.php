<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{$pqr->title}}</h5>  
        
        <h6 class="card-text">{{ $pqr->content }}</h6>
        <p>Solicitado por {{ $pqr->user->name }}</p>
        <p>Interpuesto a {{ $pqr->product->user->name }}</p>
        @if ($pqr->status == 'review')
          <p class="card-text">En revisión</p>
        @else
        <p class="card-text">Respondido</p>
        @endif
        {{ $tipo }}
        @if ($pqr->response!=null)
          <p class="card-text" >{{ $pqr->response }}</p>
        @else
          <p class="card-text">Sin respuesta a tu petición, tenemos 15 dias habiles para responderte</p>
        @endif
        @if ($tipo==1 & ($pqr->status =='review'| $pqr->status==null))
          <button class="btn"><a href="{{route('pqr.edit',$pqr->id)}}" >Responder</a></button>            
        @endif
    </div>
</div>
