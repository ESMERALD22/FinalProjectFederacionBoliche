@extends('adminlte::page')

@section('title', 'Entrenador datos personales')
@section('content_header')

@section('content_header')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver datos personales del entrenador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('entrenador-datos-personales.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cui:</strong>
                            {{ $entrenadorDatosPersonale->cui }}
                        </div>
                        <div class="form-group">
                            <strong>Primer nombre:</strong>
                            {{ $entrenadorDatosPersonale->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo nombre:</strong>
                            {{ $entrenadorDatosPersonale->nombre2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido paterno:</strong>
                            {{ $entrenadorDatosPersonale->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido materno:</strong>
                            {{ $entrenadorDatosPersonale->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido de casada:</strong>
                            {{ $entrenadorDatosPersonale->apellidoDeCasada }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de naciemiento:</strong>
                            {{ $entrenadorDatosPersonale->fechaNaciemiento }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono de casa:</strong>
                            {{ $entrenadorDatosPersonale->telefonodecasa }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $entrenadorDatosPersonale->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $entrenadorDatosPersonale->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $entrenadorDatosPersonale->municipio->municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $entrenadorDatosPersonale->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
