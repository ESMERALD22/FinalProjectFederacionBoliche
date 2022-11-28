@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')

@section('content_header')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title"><b style="color:darkblue">
                            <center>¡¡¡ BIENVENIDO !!!!</center>
                            <center>FICHA DE SOLICITUD DE INSCRIPCION PARA PERTENECER A FEDERACION DE BOLICHE</center>
                        </b></span>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('ficha1s.create', '$departmento->id' ) }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('ficha1.form2')


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
<script>
    console.log('Hi!');
</script>
@stop