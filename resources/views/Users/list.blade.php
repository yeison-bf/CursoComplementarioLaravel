@extends('layouts.app')

@section('title_module', 'Usuarios')

@section('content')
    <table class="table table-bordered nowrap" style="width:100%" id="tableUsers">
        <thead>
            <th>Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Estado</th>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <td>{{ $item->document }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->lastname }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->numberPhone }}</td>
                    <td>
                        @if ($item->estado == 1)
                            <button class="btn btn-success btn-sm col-12">Activo</button>
                        @else
                            <button class="btn btn-danger btn-sm col-12">Inactivo</button>
                        @endif
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>


    <script>

        $(document).ready(() => {
            new DataTable('#tableUsers', {
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
@endsection
