<div class="form-group">
    {{ Form::label('name','Usuario') }}
    {{ Form::text('name',null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('email','Correo') }}
    {{ Form::text('email',null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('password','Contraseña') }}
    {{ Form::text('password',null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    <button type="submit" class="btn btn-sm btn-primary"> Guardar </button>
</div>