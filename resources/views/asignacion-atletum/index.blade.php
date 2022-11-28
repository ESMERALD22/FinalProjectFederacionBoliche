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
                                {{ __('Asignación Atleta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('asignacionAtletum.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Asignación') }}
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
                                        
										<th>Id atleta</th>
										<th>Id categoria</th>
										<th>Id prt</th>
										<th>Id lineadesarrollo</th>
										<th>Id centrodeportivo</th>
										<th>Id fadn</th>
										<th>Id etapadeportiva</th>
										<th>Id entrenador</th>
										<th>Experiencia deportiva años</th>
										<th>Experiencia deportiva meses</th>
										<th>Practicante</th>
										<th>Federado</th>
										<th>Modalidad</th>
										<th>Adaptado</th>
										<th>Id tipo atleta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asignacionAtleta as $asignacionAtletum)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $asignacionAtletum->atletaDatosPersonale->nombre1 }}</td>
											<td>{{ $asignacionAtletum->categorium->nombreCategoria }}</td>
											<td>{{ $asignacionAtletum->prt->nombrePRT }}</td>
											<td>{{ $asignacionAtletum->lineaDesarrollo->tipoLineaDesarrollo }}</td>
											<td>{{ $asignacionAtletum->centroDeportivo->nombreCentroDeportivo }}</td>
											<td>{{ $asignacionAtletum->fadn->nombreFADN }}</td>
											<td>{{ $asignacionAtletum->etapaDeportiva->tipoEtapaDeportiva }}</td>
											<td>{{ $asignacionAtletum->entrenadorDatosPersonale->nombre1 }}</td>
											<td>{{ $asignacionAtletum->experienciaDeportivaYears }}</td>
											<td>{{ $asignacionAtletum->experienciaDeportivaMeses }}</td>
											<td>{{ $asignacionAtletum->practicante }}</td>
											<td>{{ $asignacionAtletum->federado }}</td>
											<td>{{ $asignacionAtletum->modalidad }}</td>
											<td>{{ $asignacionAtletum->adaptado }}</td>
											<td>{{ $asignacionAtletum->tipoAtletum->tipoAtleta }}</td>

                                            <td>
                                                <form action="{{ route('asignacionAtletum.destroy',$asignacionAtletum->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('asignacionAtletum.show',$asignacionAtletum->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('asignacionAtletum.edit',$asignacionAtletum->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
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
