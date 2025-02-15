@extends('partials.plantilla')

@section('titulo', 'usuarios')
@section('contenido')
    <h1 class="text-center">Listado de Usuarios</h1>
    <div class="container">
        <h1>Lista de Usuarios</h1><div class="mb-3">
            <a href="{{ route('usuarios.create') }}" class="btn btn-success">Añadir Usuario</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>NIF</th>
                    <th>Email</th>
                    <th>Centro</th>
                    <th>Empresa</th>
                    <th>Roles</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->NIF }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->centro->nombre ?? 'Sin asignar' }}</td>
                        <td>{{ $usuario->empresa->nombre ?? 'Sin asignar' }}</td>
                        <td>
                            @foreach ($usuario->roles as $rol)
                                <span class="badge bg-primary">{{ $rol->nombre }}</span>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $usuarios->links() }}
        </div>
    </div>

@endsection
