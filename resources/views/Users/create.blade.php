@extends('layouts.app')

@section('title_module', 'Usuarios')

@section('content')
<div class="p-5">
    <form class="form" action="{{ route('users.create') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Documento de identidad</label>
                    <input onkeyup="crearClave()" name="documento" type="number" class="form-control" id="documentoIdentidad"
                        aria-describedby="emailHelp">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellidos</label>
                    <input name="apellidos" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="correo" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Contraseña</label>
                    <input disabled style="background: white" name="contrasena" type="text" class="form-control" id="claveUsuario"
                        aria-describedby="emailHelp">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Rol</label>
                    <select name="rol" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                        @foreach ($roles as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Compañia</label>
                    <input name="compania" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Telefono</label>
                    <input name="telefono" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
            </div>
        </div>

        <div class="pt-4">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>


<script>
    function crearClave(){
        document.getElementById('claveUsuario').value = document.getElementById('documentoIdentidad').value;
    }
</script>
@endsection
