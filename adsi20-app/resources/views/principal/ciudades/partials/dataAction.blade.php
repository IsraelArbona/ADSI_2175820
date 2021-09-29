<div class = "btn-group btn-group-sm">

    @can('principal.ciudades.show')
        <a href="{{ route('principal.ciudades.show',$ciudads->id) }}" class="btn btn-sm btn-secondary">Ver</a>
    @endcan

    @can('principal.ciudades.edit')
        <a href="{{ route('principal.ciudades.edit',$ciudads->id) }}" class="btn btn-sm btn-success" style="margin-left: 10px !important">Editar</a>
    @endcan

    @can('principal.ciudades.destroy')
        {{ Form::open(['route' => ['principal.ciudades.destroy',$ciudads->id], 'method' => 'DELETE'])}}
            <button class="btn btn-sm btn-danger"style="margin-left: 10px !important">Eliminar</button>
        {{ Form::close() }}
    @endcan

</div>