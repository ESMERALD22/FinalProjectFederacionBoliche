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
                            <span class="card-title">Show Atleta Datos Personale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('atleta-datos-personales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cui:</strong>
                            {{ $atletaDatosPersonale->cui }}
                        </div>
                        <div class="form-group">
                            <strong>Pasaporte:</strong>
                            {{ $atletaDatosPersonale->pasaporte }}
                        </div>
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $atletaDatosPersonale->NIT }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre1:</strong>
                            {{ $atletaDatosPersonale->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre2:</strong>
                            {{ $atletaDatosPersonale->nombre2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $atletaDatosPersonale->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $atletaDatosPersonale->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidodecasada:</strong>
                            {{ $atletaDatosPersonale->apellidoDeCasada }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanaciemiento:</strong>
                            {{ $atletaDatosPersonale->fechaNaciemiento }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $atletaDatosPersonale->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Telefonodecasa:</strong>
                            {{ $atletaDatosPersonale->telefonodecasa }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $atletaDatosPersonale->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Idmunicipio:</strong>
                            {{ $atletaDatosPersonale->idMunicipio }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $atletaDatosPersonale->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $atletaDatosPersonale->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Estadocivil:</strong>
                            {{ $atletaDatosPersonale->estadoCivil }}
                        </div>
                        <div class="form-group">
                            <strong>Etnia:</strong>
                            {{ $atletaDatosPersonale->etnia }}
                        </div>
                        <div class="form-group">
                            <strong>Escolaridad:</strong>
                            {{ $atletaDatosPersonale->escolaridad }}
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
