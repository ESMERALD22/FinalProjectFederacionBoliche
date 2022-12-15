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
                            <strong>Id:</strong>
                            {{ $psicologo->idpsicologo }}
                        </div>
                        <div class="form-group">
                            <strong>CUI:</strong>
                            {{ $psicologo->cui }}
                        </div>
                        <div class="form-group">
                            <strong>1ER NOMBRE:</strong>
                            {{ $psicologo->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>2DO NOMBRE:</strong>
                            {{ $psicologo->nombre2 }}
                        </div>
                        <div class="form-group">
                            <strong>1ER APELLIDO:</strong>
                            {{ $psicologo->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>2DO APELLIDO:</strong>
                            {{ $psicologo->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>APELLIDO DE CASADA:</strong>
                            {{ $psicologo->apellidoDeCasada }}
                        </div>
                        <div class="form-group">
                            <strong>FECHA DE NACIMIENTO:</strong>
                            {{ $psicologo->fechaNaciemiento }}
                        </div>
                        <div class="form-group">
                            <strong>TELEFONO DE CASA:</strong>
                            {{ $psicologo->telefonodecasa }}
                        </div>
                        <div class="form-group">
                            <strong>CELULAR:</strong>
                            {{ $psicologo->celular }}
                        </div>
                        <div class="form-group">
                            <strong>GENERO:</strong>
                            {{ $psicologo->genero }}
                        </div>
                        <div class="form-group">
                            <strong>DIRECCION:</strong>
                            {{ $psicologo->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>IdMUNICIPIO:</strong>
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
