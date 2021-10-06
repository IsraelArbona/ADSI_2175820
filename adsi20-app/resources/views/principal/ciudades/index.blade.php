@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <!-- Modal -->
            <div class="modal fade" id="excelModal" tabindex="-1" aria-labelledby="excelModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="excelModalLabel">Cargar Archivo Ciudades</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <form action="{{ route('principal.ciudades.importarExcel') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group mb-4" style="max-width:500px; margin: 0 auto;">
                                    <input type="file" name="fileciudad" class="custom-file-input" id="customFileCiudad" required> 
                                    <label class="custom-file-label" for="customFileCiudad">Ciudades</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Registro Ciudades
                    @can('principal.ciudades.create')
                        <a href="{{ route('principal.ciudades.create') }}" class="btn btn-sm btn-outline-primary float-right" style="margin-left:20px !important;">
                            Nuevo
                        </a>
                    @endcan

                    <a class="btn btn-sm btn-outline-primary float-right" data-toggle="modal" data-target="#excelModal" style="margin-left:20px !important;">
                        Importar Excel
                    </a>
                </div>

                <div class="card-body">
                    <table id="tciudad" class="display compact table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Dpto</th>
                                <th width="80px">action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Dpto</th>
                                <th>action</th>
                            </tr>
                        </tfoot>
                    </table>
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

    <script type="text/javascript">
        $(document).ready(function(){

            $('#tciudad').DataTable({
                "serverSide": true,
                "responsive": true,
                "ajax": "{{ route('principal.ciudades.index')}}",
                "columns": [
                    {data: 'id', name:'ciudads.id'},
                    {data: 'nombre', name:'ciudads.nombre'},
                    {data: 'dnombre', name:'dptos.nombre'},
                    {data: 'action', orderable: false, searchable:false}
                ],
                "dom": "<'row'<'col-lg-10 col-md-10 col-xs-12'f><'col-lg-2 col-md-2 col-xs-12'l>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                language: {
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst":    "Primero",
                            "sLast":     "Último",
                            "sNext":     "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
                        "buttons": {
                            "copy": "Copiar",
                            "colvis": "Visibilidad"
                        }
                    }
            });
        });
    </script>

@endsection


