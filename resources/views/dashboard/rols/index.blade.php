@extends('dashboard.master')
@section('content')
    <a href="{{ route('rol.create') }}" class="btn btn-success btn-small mb-3">Crear rol</a>
    <h6>Roles</h6>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Llave</th>
                <th>Rol</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rols as $rol)
                <tr>
                    <td scope="row">{{ $rol -> id }}</td>
                    <td>{{ $rol -> key }}</td>
                    <td>{{ $rol -> rol }}</td>
                    <td>{{ $rol -> description }}</td>
                    <td>{{ $rol -> created_at }}</td>
                    <td>
                        <a href="{{ route('rol.edit', $rol -> id) }}" class="btn btn-info btn-sm">Editar</a>
                        <a href="{{ route('rol.show', $rol -> id) }}" class="btn btn-success btn-sm">Ver</a>
                        <button data-id="{{ $rol->id }}" class="btn btn-danger btn-sm"
                            data-toggle='modal' data-target="#ModalDelete">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
{{ $rols->links() }}
<div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="ModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDeleteLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estás seguro que deseas eliminar el rol?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="deleterol" action="{{ route('rol.destroy',0) }}" data-action="{{ route('rol.destroy',0) }}" method="rol">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function(){
        $('#ModalDelete').on('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = $(event.relatedTarget)
            var id = button.data('id')
            action = $('#deleterol').attr('data-action').slice(0,-1)
            action += id
            console.log(action)
            $('#deleterol').attr('action', action)
            var modal = $(this)
            modal.find('.modal-title').text('Vas a eliminar el rol ' + id)
        })
    }
    
</script>