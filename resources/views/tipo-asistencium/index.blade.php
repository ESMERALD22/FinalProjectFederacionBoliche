@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')

@section('content_header')      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo de Asistencia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipo-asistencia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear otro tipo de Asistencia') }}
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
                                        
										<th>Tipoasistencia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipoAsistencia as $tipoAsistencium)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipoAsistencium->tipoAsistencia }}</td>

                                            <td>
                                                <form action="{{ route('tipo-asistencia.destroy',$tipoAsistencium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipo-asistencia.show',$tipoAsistencium->id) }}"><i class="fa fa-fw fa-eye"></i> VER</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipo-asistencia.edit',$tipoAsistencium->id) }}"><i class="fa fa-fw fa-edit"></i> EDITAR</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> ELIMINAR</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tipoAsistencia->links() !!}
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
