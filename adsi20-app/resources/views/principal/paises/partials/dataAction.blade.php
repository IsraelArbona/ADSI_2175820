<div class = "btn-group btn-group-sm">

    @can('principal.paises.show')
        <a href="{{ route('principal.paises.show',$paises->id) }}" class="btn btn-sm btn-secondary">Ver</a>
    @endcan

    @can('principal.paises.edit')
        <a href="{{ route('principal.paises.edit',$paises->id) }}" class="btn btn-sm btn-success" style="margin-left: 10px !important">Editar</a>
    @endcan

    @can('principal.paises.destroy')
        {{ Form::open(['route' => ['principal.paises.destroy',$paises->id], 'method' => 'DELETE'])}}
            <button class="btn btn-sm btn-danger"style="margin-left: 10px !important">Eliminar</button>
        {{ Form::close() }}
    @endcan

</div>