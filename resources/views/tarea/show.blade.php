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
                            <span class="card-title">Show Tarea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tareas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idreporte:</strong>
                            {{ $tarea->idReporte }}
                        </div>
                        <div class="form-group">
                            <strong>Tarea:</strong>
                            {{ $tarea->tarea }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicial:</strong>
                            {{ $tarea->fechaInicial }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafinal:</strong>
                            {{ $tarea->fechaFinal }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $tarea->hora }}
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
