
<div class="form-group">
    {{ Form::label('id','Codigo') }}
    {{ Form::text('id',null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('nombre','Nombre') }}
    {{ Form::text('nombre',null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('abrev','Abrev') }}
    {{ Form::text('abrev',null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    <button type="submit" class="btn btn-sm btn-primary"> Guardar </button>
</div>