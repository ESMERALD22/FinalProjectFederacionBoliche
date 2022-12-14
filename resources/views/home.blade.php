@extends('adminlte::page')

		@section('title', 'Dashboard')
    		@section('content_header')

		@section('content_header')  


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('INICIO') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('BIENVENIDO AL SISTEMA DE LA FEDERACION DE BOLICHE') }}
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
        <script> console.log('Hi!'); </script>
@stop
