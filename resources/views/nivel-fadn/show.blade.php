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
                            <span class="card-title">Show Nivel Fadn</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('nivel-fadns.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nivelfadn:</strong>
                            {{ $nivelFadn->nivelFADN }}
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

