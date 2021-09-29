<div class="form-group">
    {{ Form::label('name','Rol') }}
    {{ Form::text('name',null,['class'=>'form-control']) }}
</div>

<h3>Lista de Permisos</h3>

<div class="form-group">
    <ul class="list-unstyled">
        @foreach($permissions as $permission)
        <li>
            <label>
                {{ Form::checkbox('permissions[]',$permission->id,null) }}
                {{ $permission->name }}
            </label>
        </li>
        @endforeach

    </ul>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-sm btn-primary"> Guardar </button>
</div>