@extends('layouts.app')

@section('content')
<h1>Ver docente<h1>
    @csrf
    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $docente->nombre }}" disable>

        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido"  value="{{ $docente->apellido }}" 
            disable>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" id="email" name="email"  value="{{ $docente->email }}" 
            disable>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('docentes.index') }}" class="btn btn-secondary">Retornar</a>

        </div>

    </div>

</form>

@endsection