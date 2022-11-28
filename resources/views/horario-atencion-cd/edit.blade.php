@extends('adminlte::page')

@section('title', 'Horarios de atención')
@section('content_header')

@section('content_header')   
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar horario de atención de centro deportivo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('horario-atencion-cds.update', $horarioAtencionCd->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('horario-atencion-cd.form')

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

