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
                            <span class="card-title">Show Psicologo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('psicologos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idpsicologo:</strong>
                            {{ $psicologo->idpsicologo }}
                        </div>
                        <div class="form-group">
                            <strong>Cui:</strong>
                            {{ $psicologo->cui }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre1:</strong>
                            {{ $psicologo->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre2:</strong>
                            {{ $psicologo->nombre2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $psicologo->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $psicologo->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidodecasada:</strong>
                            {{ $psicologo->apellidoDeCasada }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanaciemiento:</strong>
                            {{ $psicologo->fechaNaciemiento }}
                        </div>
                        <div class="form-group">
                            <strong>Telefonodecasa:</strong>
                            {{ $psicologo->telefonodecasa }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $psicologo->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $psicologo->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $psicologo->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Idmunicipio:</strong>
                            {{ $psicologo->idMunicipio }}
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
