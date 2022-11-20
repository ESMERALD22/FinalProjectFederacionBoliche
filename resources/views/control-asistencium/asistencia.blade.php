@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')

@section('content_header')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Control Asistencia') }}
                        </span>

                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">BUSCAR POR CATEGORIAS</span>
                        </div>
                        <div class="card-body">
                        <form method="GET" action="{{ route('control-asistencia.create') }}" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <select name="select">
                                    @foreach ($categorias as $cat){
                                    <option value="{{$cat->id}}"> {{$cat->nombre_categoria}}</option>
                                    }
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary ">Buscar</button>
                            </div>
                        </form>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-primary" href="{{ route('control-asistencia.create') }}"> TODAS</a>
                        </div>
                    </div>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Atleta</th>
                                    <th>Fecha</th>
                                    <th>Asistencia</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($atletas as $atl)
                                <tr>
                                    <form action="{{ route('control-asistencia.store') }}" method="POST">
                                        <input type="hidden" id="uname" name="idA" value="{{$atl->id}}" readonly="true">
                                        <td>{{ $atl->nombre1 . ' - ' .
                                                $atl->nombre2 . ' - ' .
                                                $atl-> apellido1 . ' - ' .
                                                $atl->apellido2 
                                            }}</td>

                                        <td><input type="date" value="{{date('Y-m-d')}}" name="fechaA"> </td>
                                        <td>
                                            <select name="select">
                                                @foreach ($tiposA as $tipo){
                                                <option value="{{$tipo->id}}"> {{$tipo->tipoAsistencia}}</option>
                                                }
                                                @endforeach
                                            </select>
                                        </td>

                                        <td>
                                            <button type="submit" class="btn btn-sm btn-primary "><i class="fa fa-fw fa-check"></i>Anotar</button>
                                            @csrf
                                        </td>
                                    </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
<script>
    console.log('Hi!');
</script>
@stop