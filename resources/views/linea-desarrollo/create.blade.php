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
                        <span class="card-title">Create Linea Desarrollo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('linea-desarrollos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('linea-desarrollo.form')

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

