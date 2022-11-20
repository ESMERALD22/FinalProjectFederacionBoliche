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
                        <span class="card-title">Show Ficha1</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('ficha1s.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Cuiatleta:</strong>
                        {{ $ficha1->cuiAtleta }}
                    </div>
                    <div class="form-group">
                        <strong>Pasaporte:</strong>
                        {{ $ficha1->pasaporte }}
                    </div>
                    <div class="form-group">
                        <strong>Nit:</strong>
                        {{ $ficha1->NIT }}
                    </div>
                    <div class="form-group">
                        <strong>Nombre1A:</strong>
                        {{ $ficha1->nombre1A }}
                    </div>
                    <div class="form-group">
                        <strong>Nombre2A:</strong>
                        {{ $ficha1->nombre2A }}
                    </div>
                    <div class="form-group">
                        <strong>Apellido1A:</strong>
                        {{ $ficha1->apellido1A }}
                    </div>
                    <div class="form-group">
                        <strong>Apellido2A:</strong>
                        {{ $ficha1->apellido2A }}
                    </div>
                    <div class="form-group">
                        <strong>Apellidodecasadaa:</strong>
                        {{ $ficha1->apellidoDeCasadaA }}
                    </div>
                    <div class="form-group">
                        <strong>Fechanaciemientoa:</strong>
                        {{ $ficha1->fechaNaciemientoA }}
                    </div>
                    <div class="form-group">
                        <strong>Celulara:</strong>
                        {{ $ficha1->celularA }}
                    </div>
                    <div class="form-group">
                        <strong>Telefonodecasaa:</strong>
                        {{ $ficha1->telefonodecasaA }}
                    </div>
                    <div class="form-group">
                        <strong>Generoa:</strong>
                        {{ $ficha1->generoA }}
                    </div>
                    <div class="form-group">
                        <strong>Idmunicipioa:</strong>
                        {{ $ficha1->idMunicipioA }}
                    </div>
                    <div class="form-group">
                        <strong>Direcciona:</strong>
                        {{ $ficha1->direccionA }}
                    </div>
                    <div class="form-group">
                        <strong>Correoa:</strong>
                        {{ $ficha1->correoA }}
                    </div>
                    <div class="form-group">
                        <strong>Estadocivila:</strong>
                        {{ $ficha1->estadoCivilA }}
                    </div>
                    <div class="form-group">
                        <strong>Etniaa:</strong>
                        {{ $ficha1->etniaA }}
                    </div>
                    <div class="form-group">
                        <strong>Escolaridada:</strong>
                        {{ $ficha1->escolaridadA }}
                    </div>
                    <div class="form-group">
                        <strong>Fotografiaa:</strong>
                        {{ $ficha1->fotografiaA }}
                    </div>
                    <div class="form-group">
                        <strong>Cuiencargado:</strong>
                        {{ $ficha1->cuiEncargado }}
                    </div>
                    <div class="form-group">
                        <strong>Nombre1E:</strong>
                        {{ $ficha1->nombre1E }}
                    </div>
                    <div class="form-group">
                        <strong>Nombre2E:</strong>
                        {{ $ficha1->nombre2E }}
                    </div>
                    <div class="form-group">
                        <strong>Apellido1E:</strong>
                        {{ $ficha1->apellido1E }}
                    </div>
                    <div class="form-group">
                        <strong>Apellido2E:</strong>
                        {{ $ficha1->apellido2E }}
                    </div>
                    <div class="form-group">
                        <strong>Apellidodecasadae:</strong>
                        {{ $ficha1->apellidoDeCasadaE }}
                    </div>
                    <div class="form-group">
                        <strong>Fechanaciemientoe:</strong>
                        {{ $ficha1->fechaNaciemientoE }}
                    </div>
                    <div class="form-group">
                        <strong>Telefonodecasae:</strong>
                        {{ $ficha1->telefonodecasaE }}
                    </div>
                    <div class="form-group">
                        <strong>Celulare:</strong>
                        {{ $ficha1->celularE }}
                    </div>
                    <div class="form-group">
                        <strong>Generoe:</strong>
                        {{ $ficha1->generoE }}
                    </div>
                    <div class="form-group">
                        <strong>Direccione:</strong>
                        {{ $ficha1->direccionE }}
                    </div>
                    <div class="form-group">
                        <strong>Pesoa:</strong>
                        {{ $ficha1->pesoA }}
                    </div>
                    <div class="form-group">
                        <strong>Alturaa:</strong>
                        {{ $ficha1->alturaA }}
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
