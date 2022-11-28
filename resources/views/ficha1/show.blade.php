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
                        <strong>------------------------------------------DATOS DEL ATLETA: ------------------------------------------</strong>
                    </div>

                    <strong>FOTOGRAFIA DEL ATLETA:</strong>
                    <img src="{{ asset('uploads/atletas/'.$ficha1->fotografiaA) }}" width="70px" height="70px" alt="Image">

                    <div class="form-group">
                        <strong>CUI DEL ATLETA:</strong>
                        {{ $ficha1->cuiAtleta }}
                    </div>
                    <div class="form-group">
                        <strong>NOMBRES:</strong>
                        {{ $ficha1->nombre1A ." ". $ficha1->nombre2A ." ".  $ficha1->apellido1A ." ".  $ficha1->apellido2A }}
                    </div>
                    <div class="form-group">
                        <strong>PASAPORTEe:</strong>
                        {{ $ficha1->pasaporte }}
                    </div>
                    <div class="form-group">
                        <strong>NIT:</strong>
                        {{ $ficha1->NIT }}
                    </div>
                    <div class="form-group">
                        <strong>APELLIDO DE CASADA:</strong>
                        {{ $ficha1->apellidoDeCasadaA }}
                    </div>
                    <div class="form-group">
                        <strong>FECHA DE NACIMIENTO:</strong>
                        {{ $ficha1->fechaNaciemientoA }}
                    </div>
                    <div class="form-group">
                        <strong>CELULAR:</strong>
                        {{ $ficha1->celularA }}
                    </div>
                    <div class="form-group">
                        <strong>TELEFONO DE CASA:</strong>
                        {{ $ficha1->telefonodecasaA }}
                    </div>
                    <div class="form-group">
                        <strong>GENERO:</strong>
                        @if($ficha1->generoA == 0)
                        Masculino
                        @else
                        Femenino
                        @endif
                    </div>
                    <div class="form-group">
                        <strong>DEPARTAMENTO:</strong>
                        {{ $ficha1->municipio->departamento->departamento }}
                    </div>
                    <div class="form-group">
                        <strong>MUNICIPIO:</strong>
                        {{ $ficha1->municipio->municipio }}
                    </div>
                    <div class="form-group">
                        <strong>DIRECCION:</strong>
                        {{ $ficha1->direccionA }}
                    </div>
                    <div class="form-group">
                        <strong>CORREO:</strong>
                        {{ $ficha1->correoA }}
                    </div>
                    <div class="form-group">
                        <strong>ESTADO CIVIL:</strong>
                        @if($ficha1->estadoCivilA == 0)
                        Soltero
                        @elseif($ficha1->estadoCivilA == 1)
                        Casado
                        @elseif($ficha1->estadoCivilA == 2)
                        Divorciado
                        @elseif($ficha1->estadoCivilA == 3)
                        Viudo
                        @endif
                    </div>
                    <div class="form-group">
                        <strong>ETNIA:</strong>
                        {{ $ficha1->etniaA }}
                    </div>
                    <div class="form-group">
                        <strong>ESCOLARIDAD:</strong>
                        {{ $ficha1->escolaridadA }}
                    </div>
                    <div class="form-group">
                        <strong>PESO:</strong>
                        {{ $ficha1->pesoA }}
                    </div>
                    <div class="form-group">
                        <strong>ALTURA:</strong>
                        {{ $ficha1->alturaA }}
                    </div>
                    <div class="form-group">
                        <strong>Estado:</strong>
                        @if($ficha1->estado == 0)
                        Sin Aprobar
                        @else
                        Aprobado
                        @endif

                    </div>
                    <div class="form-group">
                        <strong>------------------------------------------DATOS DEL ENCARGADO: ------------------------------------------</strong>
                    </div>

                    <div class="form-group">
                        <strong>CUI ENCARGADO:</strong>
                        {{ $ficha1->cuiEncargado }}
                    </div>
                    <div class="form-group">
                        <strong>NOMBRES:</strong>
                        {{ $ficha1->nombre1E ." ". $ficha1->nombre2E ." ".$ficha1->apellido1E ." ".$ficha1->apellido2E}}
                    </div>
                    <div class="form-group">
                        <strong>APELLIDO DE CASADA:</strong>
                        {{ $ficha1->apellidoDeCasadaE }}
                    </div>
                    <div class="form-group">
                        <strong>FECHA DE NACIMIENTO:</strong>
                        {{ $ficha1->fechaNaciemientoE }}
                    </div>
                    <div class="form-group">
                        <strong>TELEFONO DE CASA:</strong>
                        {{ $ficha1->telefonodecasaE }}
                    </div>
                    <div class="form-group">
                        <strong>CELULAR:</strong>
                        {{ $ficha1->celularE }}
                    </div>
                    <div class="form-group">
                        <strong>GENERO:</strong>
                        @if($ficha1->generoA == 0)
                        Masculino
                        @else
                        Femenino
                        @endif
                    </div>
                    <div class="form-group">
                        <strong>DIRECCION:</strong>
                        {{ $ficha1->direccionE }}
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
<script>
    console.log('Hi!');
</script>
@stop