@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Ver Dpto
                    <a href="{{ route('principal.dptos.index') }}" class="btn btn-sm btn-outline-primary float-right">
                        Regresar
                    </a>
                </div>

                <div class="card-body">
                    <p><strong>Nombre</strong> {{ $dpto->nombre }}</p>
                    <p><strong>Pais</strong> {{ $dpto->pais_id }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection


