@extends('layouts.app')
@section('content')
    <div class="row">
         <div class="col-lg-12 margin-tb">
             <div class="pull-left">
                  <h2>Agregar Nuevo Alumno</h2>
             </div>
             <div class="pull-right">
                  <a href="{{route('alumnos.index') }}" class="btn btn-danger">Volver</a>
             </div>
         </div>
    </div>
    @if ($errors->any())
        <div class="class alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <div class="class row">
            <div class="class col-xs-12 col-sm-12 col-md-12">
                <div class="class form-group">
                    <strong>Nombres:<strong>
                        <input type="text" name="nombres" class="form-control" placeholder="ej.Nestor Alfonso">
                    </div>
            </div>
            <div class="class row">
                <div class="class col-xs-12 col-sm-12 col-md-12">
                    <div class="class form-group">
                        <strong>Apellidos:<strong>
                            <input type="text" name="apellidos" class="form-control" placeholder="ej.Cortez Martinez">
                        </div>
                </div>
                <div class="class row">
                    <div class="class col-xs-12 col-sm-12 col-md-12">
                        <div class="class form-group">
                            <strong>Edad:<strong>
                                <input type="number" name="edad" class="form-control" placeholder="ej. 18">
                            </div>
                    </div>
                    <div class="class col-xs-12 col-sm-12 col-md-12">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
