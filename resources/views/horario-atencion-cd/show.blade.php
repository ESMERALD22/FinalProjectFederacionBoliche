@extends('adminlte::page')

@section('title', 'Horarios de atención')
@section('content_header')

@section('content_header')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver información de horario de atención de centro deportivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horario-atencion-cds.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Centro deportivo:</strong>
                            {{ $horarioAtencionCd->centroDeportivo->nombreCentroDeportivo }}
                        </div>
                        <div class="form-group">
                            <strong>Día:</strong>
                            {{ $horarioAtencionCd->dia }}
                        </div>
                        <div class="form-group">
                            <strong>Hora de apertura:</strong>
                            {{ $horarioAtencionCd->horaApertura }}
                        </div>
                        <div class="form-group">
                            <strong>Hora de cierre:</strong>
                            {{ $horarioAtencionCd->horaCierre }}
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

