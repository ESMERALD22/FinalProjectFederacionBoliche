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
                            <span class="card-title">Show Inscripcion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inscripcions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idatleta:</strong>
                            {{ $inscripcion->idAtleta }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $inscripcion->peso }}
                        </div>
                        <div class="form-group">
                            <strong>Altura:</strong>
                            {{ $inscripcion->altura }}
                        </div>
                        <div class="form-group">
                            <strong>Idencargado:</strong>
                            {{ $inscripcion->idEncargado }}
                        </div>
                        <div class="form-group">
                            <strong>Fotografia:</strong>
                            {{ $inscripcion->fotografia }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainscripcion:</strong>
                            {{ $inscripcion->fechaInscripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $inscripcion->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Idmunicipioreside:</strong>
                            {{ $inscripcion->idMunicipioReside }}
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
