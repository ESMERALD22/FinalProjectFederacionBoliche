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
                            <span class="card-title">Ver Asignacion Atleta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asignacionAtletum.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id atleta:</strong>
                            {{ $asignacionAtletum->idAtleta }}
                        </div>
                        <div class="form-group">
                            <strong>Id categoria:</strong>
                            {{ $asignacionAtletum->idCategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Id PRT:</strong>
                            {{ $asignacionAtletum->idPRT }}
                        </div>
                        <div class="form-group">
                            <strong>Id lineadesarrollo:</strong>
                            {{ $asignacionAtletum->idLineaDesarrollo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Centro Deportivo:</strong>
                            {{ $asignacionAtletum->idCentroDeportivo }}
                        </div>
                        <div class="form-group">
                            <strong>Id FADN:</strong>
                            {{ $asignacionAtletum->idFADN }}
                        </div>
                        <div class="form-group">
                            <strong>Id Etapa Deportiva:</strong>
                            {{ $asignacionAtletum->idEtapaDeportiva }}
                        </div>
                        <div class="form-group">
                            <strong>Id Entrenador:</strong>
                            {{ $asignacionAtletum->idEntrenador }}
                        </div>
                        <div class="form-group">
                            <strong>Experiencia deportiva años:</strong>
                            {{ $asignacionAtletum->experienciaDeportivaYears }}
                        </div>
                        <div class="form-group">
                            <strong>Experiencia deportiva meses:</strong>
                            {{ $asignacionAtletum->experienciaDeportivaMeses }}
                        </div>
                        <div class="form-group">
                            <strong>Practicante:</strong>
                            {{ $asignacionAtletum->practicante }}
                        </div>
                        <div class="form-group">
                            <strong>Federado:</strong>
                            {{ $asignacionAtletum->federado }}
                        </div>
                        <div class="form-group">
                            <strong>Modalidad:</strong>
                            {{ $asignacionAtletum->modalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Adaptado:</strong>
                            {{ $asignacionAtletum->adaptado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo Atleta:</strong>
                            {{ $asignacionAtletum->idTipoAtleta }}
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
