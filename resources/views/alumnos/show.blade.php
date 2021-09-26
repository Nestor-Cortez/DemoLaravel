@extends('layouts.app')
@section('content')
<div class="class row">
    <div class="class col-lg-12 margin-tb">
        <div class="class pull-left">
            <h2>Mostrando registro individual del alumno</h2>
        </div>
    </div>
    <div class="class pull-right">
        <a href="{{route('alumnos.index') }}" class="btn btn-primary">Volver</a>
    </div>
</div>
<div class="class row">
    <div class="class col-xs-12 col-md-12">
        <div class="class form-group">
            <strong>Id<strong>
                {{ $alumno->id}}
        </div>
    </div>
</div>
<div class="class col-xs-12 col-md-12">
    <div class="class form-group">
           <strong>Nombres<strong>
               {{ $alumno->nombres}}
         </div>
    </div>
</div>
<div class="class col-xs-12 col-md-12">
    <div class="class form-group">
         <strong>Apellidos<strong>
            {{ $alumno->apellidos}}
        </div>
    </div>
</div>
<div class="class col-xs-12 col-md-12">
    <div class="class form-group">
        <strong>Edad<strong>
            {{ $alumno->edad}}
        </div>
   </div>
</div>