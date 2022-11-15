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
                            <span class="card-title">Show Administrador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('administradors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cui:</strong>
                            {{ $administrador->cui }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre1:</strong>
                            {{ $administrador->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre2:</strong>
                            {{ $administrador->nombre2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $administrador->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $administrador->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidodecasada:</strong>
                            {{ $administrador->apellidoDeCasada }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanaciemiento:</strong>
                            {{ $administrador->fechaNaciemiento }}
                        </div>
                        <div class="form-group">
                            <strong>Telefonodecasa:</strong>
                            {{ $administrador->telefonodecasa }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $administrador->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $administrador->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Idmunicipio:</strong>
                            {{ $administrador->idMunicipio }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $administrador->direccion }}
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