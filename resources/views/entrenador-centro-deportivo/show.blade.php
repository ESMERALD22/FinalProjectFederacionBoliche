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
                            <span class="card-title">Ver asignación de entrenador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('entrenador-centro-deportivos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Entrenador:</strong>
                            {{ $entrenadorCentroDeportivo->EntrenadorDatosPersonale->nombre1 }} {{ $entrenadorCentroDeportivo->EntrenadorDatosPersonale->nombre2 }}
                                                {{ $entrenadorCentroDeportivo->EntrenadorDatosPersonale->apellido1 }} {{ $entrenadorCentroDeportivo->EntrenadorDatosPersonale->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $entrenadorCentroDeportivo->foto }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $entrenadorCentroDeportivo->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Nivelacademico:</strong>
                            {{ $entrenadorCentroDeportivo->nivelAcademico }}
                        </div>
                        <div class="form-group">
                            <strong>Añosexperiencia:</strong>
                            {{ $entrenadorCentroDeportivo->añosExperiencia }}
                        </div>
                        <div class="form-group">
                            <strong>Fadn:</strong>
                            {{ $entrenadorCentroDeportivo->fadn->nombreFADN }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel FADN:</strong>
                            {{ $entrenadorCentroDeportivo->nivelfadn->nivelFADN }}
                        </div>
                        <div class="form-group">
                            <strong>Centro deportivo:</strong>
                            {{ $entrenadorCentroDeportivo->centrodeportivo->nombreCentroDeportivo }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel CDAG:</strong>
                            {{ $entrenadorCentroDeportivo->nivelcdag->nivelCDAG }}
                        </div>
                        <div class="form-group">
                            <strong>Contrato:</strong>
                            {{ $entrenadorCentroDeportivo->contrato->nombreContrato }}
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
