<h2>
    {{ $modo }} Empleado
</h2>

@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="Nombre">Nombre: </label>
    <input class="form-control" type="text" name="Nombre" id="Nombre"
        value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre') }}">
</div>

<div class="form-group">
    <label for="PrimerApellido">Primer Apellido: </label>
    <input class="form-control" type="text" name="PrimerApellido" id="PrimerApellido"
        value="{{ isset($empleado->PrimerApellido) ? $empleado->PrimerApellido : old('PrimerApellido') }}">
</div>

<div class="form-group">
    <label for="SegundoApellido">Segundo Apellido: </label>
    <input class="form-control" type="text" name="SegundoApellido" id="SegundoApellido"
        value="{{ isset($empleado->SegundoApellido) ? $empleado->SegundoApellido : old('SegundoApellido') }}">
</div>

<div class="form-group">
    <label for="Correo">Correo: </label>
    <input class="form-control" type="text" name="Correo" id="Correo"
        value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Correo') }}">
</div>

<div class="form-group">
    <label for="Foto">Foto: </label>
    <input class="form-control" type="file" name="Foto" id="Foto" value="">
    @if (isset($empleado->Foto))
        <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $empleado->Foto }}" width="200" alt="">
    @endif
</div>


<input class="btn btn-success" type="submit" value="{{ $modo }} Empleado">
<a class="btn btn-primary" href="{{ url('empleado') }}">Regresar</a>
