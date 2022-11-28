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
                            <span class="card-title">Información del centro deportivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('centro-deportivos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre del centro deportivo:</strong>
                            {{ $centroDeportivo->nombreCentroDeportivo }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $centroDeportivo->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Implementación:</strong>
                            {{ $centroDeportivo->implementacion }}
                        </div>
                        <div class="form-group">
                            <strong>Accesibilidad:</strong>
                            {{ $centroDeportivo->accesibilidad }}
                        </div>
                        <div class="form-group">
                            <strong>FADN:</strong>
                            {{ $centroDeportivo->fadn->nombreFADN }}
                        </div>
                        <div class="form-group">
                            <strong>Institucion:</strong>
                            {{ $centroDeportivo->institucion->tipoInstitucion }}
                        </div>
                        <div class="form-group">
                            <strong>Espacio físico:</strong>
                            {{ $centroDeportivo->espacioFisico }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $centroDeportivo->municipio->municipio }}
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

