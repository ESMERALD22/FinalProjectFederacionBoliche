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
                            <span class="card-title">Show Encargado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('encargados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idencargado:</strong>
                            {{ $encargado->idencargado }}
                        </div>
                        <div class="form-group">
                            <strong>Cui:</strong>
                            {{ $encargado->cui }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre1:</strong>
                            {{ $encargado->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre2:</strong>
                            {{ $encargado->nombre2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $encargado->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $encargado->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidodecasada:</strong>
                            {{ $encargado->apellidoDeCasada }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanaciemiento:</strong>
                            {{ $encargado->fechaNaciemiento }}
                        </div>
                        <div class="form-group">
                            <strong>Telefonodecasa:</strong>
                            {{ $encargado->telefonodecasa }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $encargado->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $encargado->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $encargado->direccion }}
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
