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
                            <span class="card-title">Ver Anuncio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('anuncio.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $anuncio->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar:</strong>
                            {{ $anuncio->lugar }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $anuncio->detalle }}
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