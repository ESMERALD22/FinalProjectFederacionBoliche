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
                                {{ __('Asignacion Atletum') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('asignacion-atleta.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Idatleta</th>
										<th>Idcategoria</th>
										<th>Idprt</th>
										<th>Idlineadesarrollo</th>
										<th>Idcentrodeportivo</th>
										<th>Idfadn</th>
										<th>Idetapadeportiva</th>
										<th>Identrenador</th>
										<th>Experienciadeportivayears</th>
										<th>Experienciadeportivameses</th>
										<th>Practicante</th>
										<th>Federado</th>
										<th>Modalidad</th>
										<th>Adaptado</th>
										<th>Idtipoatleta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asignacionAtleta as $asignacionAtletum)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $asignacionAtletum->idAtleta }}</td>
											<td>{{ $asignacionAtletum->idCategoria }}</td>
											<td>{{ $asignacionAtletum->idPRT }}</td>
											<td>{{ $asignacionAtletum->idLineaDesarrollo }}</td>
											<td>{{ $asignacionAtletum->idCentroDeportivo }}</td>
											<td>{{ $asignacionAtletum->idFADN }}</td>
											<td>{{ $asignacionAtletum->idEtapaDeportiva }}</td>
											<td>{{ $asignacionAtletum->idEntrenador }}</td>
											<td>{{ $asignacionAtletum->experienciaDeportivaYears }}</td>
											<td>{{ $asignacionAtletum->experienciaDeportivaMeses }}</td>
											<td>{{ $asignacionAtletum->practicante }}</td>
											<td>{{ $asignacionAtletum->federado }}</td>
											<td>{{ $asignacionAtletum->modalidad }}</td>
											<td>{{ $asignacionAtletum->adaptado }}</td>
											<td>{{ $asignacionAtletum->idTipoAtleta }}</td>

                                            <td>
                                                <form action="{{ route('asignacion-atleta.destroy',$asignacionAtletum->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('asignacion-atleta.show',$asignacionAtletum->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('asignacion-atleta.edit',$asignacionAtletum->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $asignacionAtleta->links() !!}
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
