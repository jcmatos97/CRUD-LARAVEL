@extends('layouts.app')

@section('content')
    <div class="container">

        @if (Session::has('mensaje'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ Session::get('mensaje') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <a href="{{ url('empleado/create') }}" class="btn btn-success">Crear un Nuevo Empleado</a> <br><br>
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->id }}</td>
                        <td>
                            <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $empleado->Foto }}"
                                width="100" alt="">
                        </td>
                        <td>{{ $empleado->Nombre }}</td>
                        <td>{{ $empleado->PrimerApellido }}</td>
                        <td>{{ $empleado->SegundoApellido }}</td>
                        <td>{{ $empleado->Correo }}</td>
                        <td>
                            <a href="{{ url('/empleado/' . $empleado->id . '/edit') }}" class="btn btn-warning">Editar</a>
                            |
                            <form method="post" class="d-inline" action="{{ url('/empleado/' . $empleado->id) }}">
                                @csrf
                                {{ @method_field('DELETE') }}
                                <input type="submit" value="Borrar" class="btn btn-danger"
                                    onclick="return confirm('¿Desea Borrar Registro?')">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $empleados->links() !!}
    </div>
@endsection
