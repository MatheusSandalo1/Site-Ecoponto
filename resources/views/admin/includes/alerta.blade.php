
@if (Session::has('sucesso') || Session::has('erro'))

    @if (Session::get('sucesso'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{!! Session::get('sucesso') !!}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if (Session::get('erro'))

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{!! Session::get('erro') !!}</strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>

    @endif


@endif







