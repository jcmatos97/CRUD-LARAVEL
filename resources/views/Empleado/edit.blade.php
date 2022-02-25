@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ url('empleado/create') }}" class="btn btn-success">Crear un Nuevo Empleado</a>

        <form method="post" action="{{ url('/empleado/' . $empleado->id) }}" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            @include('empleado.formTemplate', ['modo' => 'Editar'])
        </form>
    </div>
@endsection
