@extends('adminlte::page')

@section('title', 'Entrenador')
@section('content_header')

@section('content_header') 
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Asignar entrenador a centro deportivo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('entrenador-centro-deportivos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('entrenador-centro-deportivo.form')

                        </form>
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
