@extends('layouts.app')
@section('title_module', 'Roles')
@section('content')

    <div class="row">
        <div class="col-12">
            <button class="btn btn-primary" data-toggle="modal" data-target="#registroRoles">Nuevo</button>
        </div>
    </div>
    <table class="table table-bordered nowrap" style="width:100%" id="tableRoles">
        <thead>
            <th>Item</th>
            <th>Nombres</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <?php $count = 1; ?>
            @foreach ($roles as $item)
                <tr>
                    <td>{{ ++$count }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Cancelar</button>
                            <button type="button" class="btn btn-info">Permisos</button>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>


    <script>
        $(document).ready(() => {
            new DataTable('#tableRoles', {
                responsive: true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        })
    </script>



    <!-- Modal -->
    <div class="modal fade" id="registroRoles" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form" action="{{ route('role.create') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input name="nombreRole" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">No se permiten caracteres especiales y/o
                                números</small>
                        </div>

                        <label for="">Permisos</label>
                        <div class="row">
                            <div class="col-6">
                                @foreach ($permisos as $item)
                                    <div class="form-check">
                                        <input  value="{{$item->id}}" class="form-check-input" name="permisos_listado[]"
                                            type="checkbox" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            {{$item->name}}
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                </form>

            </div>
        </div>
    </div>

@endsection
