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
                            <span class="card-title">Show Asignacion Atletum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asignacion-atleta.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idatleta:</strong>
                            {{ $asignacionAtletum->idAtleta }}
                        </div>
                        <div class="form-group">
                            <strong>Idcategoria:</strong>
                            {{ $asignacionAtletum->idCategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Idprt:</strong>
                            {{ $asignacionAtletum->idPRT }}
                        </div>
                        <div class="form-group">
                            <strong>Idlineadesarrollo:</strong>
                            {{ $asignacionAtletum->idLineaDesarrollo }}
                        </div>
                        <div class="form-group">
                            <strong>Idcentrodeportivo:</strong>
                            {{ $asignacionAtletum->idCentroDeportivo }}
                        </div>
                        <div class="form-group">
                            <strong>Idfadn:</strong>
                            {{ $asignacionAtletum->idFADN }}
                        </div>
                        <div class="form-group">
                            <strong>Idetapadeportiva:</strong>
                            {{ $asignacionAtletum->idEtapaDeportiva }}
                        </div>
                        <div class="form-group">
                            <strong>Identrenador:</strong>
                            {{ $asignacionAtletum->idEntrenador }}
                        </div>
                        <div class="form-group">
                            <strong>Experienciadeportivayears:</strong>
                            {{ $asignacionAtletum->experienciaDeportivaYears }}
                        </div>
                        <div class="form-group">
                            <strong>Experienciadeportivameses:</strong>
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
                            <strong>Idtipoatleta:</strong>
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
