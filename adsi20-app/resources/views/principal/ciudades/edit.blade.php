@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Registro Editar Ciudad
                    <a href="{{ route('principal.ciudades.index') }}" class="btn btn-sm btn-outline-primary float-right">
                        Regresar
                    </a>
                </div>

                <div class="card-body">
                    {{ Form::model($ciudad,['route' => ['principal.ciudades.update',$ciudad->id], 'method' => 'PUT']) }}
                        @include('principal.ciudades.partials.forme')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection


