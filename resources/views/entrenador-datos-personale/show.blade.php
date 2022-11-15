@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')

@section('content_header')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Entrenador Datos Personale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('entrenador-datos-personales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cui:</strong>
                            {{ $entrenadorDatosPersonale->cui }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre1:</strong>
                            {{ $entrenadorDatosPersonale->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre2:</strong>
                            {{ $entrenadorDatosPersonale->nombre2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $entrenadorDatosPersonale->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $entrenadorDatosPersonale->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidodecasada:</strong>
                            {{ $entrenadorDatosPersonale->apellidoDeCasada }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanaciemiento:</strong>
                            {{ $entrenadorDatosPersonale->fechaNaciemiento }}
                        </div>
                        <div class="form-group">
                            <strong>Telefonodecasa:</strong>
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
                            <strong>Idmunicipio:</strong>
                            {{ $entrenadorDatosPersonale->idMunicipio }}
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
