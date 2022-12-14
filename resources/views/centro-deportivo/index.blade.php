@extends('adminlte::page')

@section('title', 'Centro deportivo')
@section('content_header')

@section('content_header') 
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Centro deportivo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('centro-deportivos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar centro deportivo') }}
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
                                        
										<th>Nombre del centro deportivo</th>
										<th>Dirección</th>
										<th>Implementación</th>
										<th>Accesibilidad</th>
										<th>FADN</th>
										<th>Institución</th>
										<th>Espacio físico</th>
										<th>Municipio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($centroDeportivos as $centroDeportivo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $centroDeportivo->nombreCentroDeportivo }}</td>
											<td>{{ $centroDeportivo->direccion }}</td>
											<td>{{ $centroDeportivo->implementacion }}</td>
											<td>{{ $centroDeportivo->accesibilidad }}</td>
											<td>{{ $centroDeportivo->fadn->nombreFADN }}</td>
											<td>{{ $centroDeportivo->institucion->tipoInstitucion }}</td>
											<td>{{ $centroDeportivo->espacioFisico }}</td>
											<td>{{ $centroDeportivo->municipio->municipio }}</td>

                                            <td>
                                                <form action="{{ route('centro-deportivos.destroy',$centroDeportivo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('centro-deportivos.show',$centroDeportivo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('centro-deportivos.edit',$centroDeportivo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $centroDeportivos->links() !!}
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

