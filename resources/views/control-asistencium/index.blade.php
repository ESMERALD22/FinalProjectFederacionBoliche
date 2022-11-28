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
                            {{ __('Control Asistencium') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('control-asistencia.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Marcar Asistencia') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Atleta</th>
                                    <th>Fecha</th>
                                    <th>Asistencia</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($controlAsistencia as $controlAsistencium)
                                <tr>
                               
                                    <td>{{ $controlAsistencium->atletaDatosPersonale->nombre1 . ' - ' .
                                                $controlAsistencium->atletaDatosPersonale->nombre2 . ' - ' .
                                                $controlAsistencium->atletaDatosPersonale-> apellido1 . ' - ' .
                                                $controlAsistencium->atletaDatosPersonale->apellido2 
                                            }}</td>
                                    <td>{{ $controlAsistencium->fecha }}</td>
                                    <td>{{ $controlAsistencium->tipoAsistencium->tipoAsistencia }}</td>

                                    <td>
                                        <form action="{{ route('control-asistencia.destroy',$controlAsistencium->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('control-asistencia.show',$controlAsistencium->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('control-asistencia.edit',$controlAsistencium->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $controlAsistencia->links() !!}
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
