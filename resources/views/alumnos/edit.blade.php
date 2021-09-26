@extends('layouts.app')
@section('content')
<div class="class row">
    <div class="class col-lg-12 margin-tb">
        <div class="class pull-left">
            <h2>Editando Registro del Alumno</h2>
        </div>
    </div>
    <div class="class pull-right">
        <a href="{{route('alumnos.index') }}" class="btn btn-primary">Volver</a>
    </div>
</div>
@if ($errors->any())
    <div class="lert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('alumnos.update', $alumno->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="class row">
        <div class="class col-xs-12 col-sm-12 col-md-12">
            <div class="class form-group">
                <strong>Nombres:<strong>
                    <input type="text" name="nombres" class="form-control" value="{{ $alumno->nombres}}">
                </div>
        </div>
    </div>
    <div class="class row">
        <div class="class col-xs-12 col-sm-12 col-md-12">
            <div class="class form-group">
                <strong>Apellidos:<strong>
                    <input type="text" name="apellidos" class="form-control" value="{{ $alumno->apellidos}}">
                </div>
        </div>
    </div>
    <div class="class row">
        <div class="class col-xs-12 col-sm-12 col-md-12">
            <div class="class form-group">
                <strong>Edad:<strong>
                    <input type="text" name="edad" class="form-control" value="{{ $alumno->edad}}">
                </div>
        </div>
    </div>
    <div class="class col-xs-12 col-sm-12 col-md-12">
        <button class="btn btn-danger" type="submit">Actualizar</button>
    </div>
</form>
@endsection