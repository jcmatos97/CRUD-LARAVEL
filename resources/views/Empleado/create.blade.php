@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{ url('/empleado') }}" enctype="multipart/form-data">
            @csrf
            @include('empleado.formTemplate', ['modo' => 'Crear'])
        </form>
    </div>
@endsection
