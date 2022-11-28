@extends('adminlte::page')

@section('title', 'Entrenador')
@section('content_header')

@section('content_header')  
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Entrenador del centro deportivo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('entrenador-centro-deportivos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Asignar entrenador') }}
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
                                        
										<th>Entrenador</th>
										<th>Foto</th>
										<th>Correo</th>
										<th>Nivel academico</th>
										<th>Años de experiencia</th>
										<th>FADN</th>
										<th>Nivel de FADN</th>
										<th>Centro deportivo</th>
										<th>Nivel CDAG</th>
										<th>Contrato</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($entrenadorCentroDeportivos as $entrenadorCentroDeportivo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $entrenadorCentroDeportivo->EntrenadorDatosPersonale->nombre1 }} {{ $entrenadorCentroDeportivo->EntrenadorDatosPersonale->nombre2 }}
                                                {{ $entrenadorCentroDeportivo->EntrenadorDatosPersonale->apellido1 }} {{ $entrenadorCentroDeportivo->EntrenadorDatosPersonale->apellido2 }}</td>
											<td>{{ $entrenadorCentroDeportivo->foto }}</td>
											<td>{{ $entrenadorCentroDeportivo->correo }}</td>
											<td>{{ $entrenadorCentroDeportivo->nivelAcademico }}</td>
											<td>{{ $entrenadorCentroDeportivo->añosExperiencia }}</td>
											<td>{{ $entrenadorCentroDeportivo->fadn->nombreFADN }}</td>
											<td>{{ $entrenadorCentroDeportivo->nivelfadn->nivelFADN }}</td>
											<td>{{ $entrenadorCentroDeportivo->centrodeportivo->nombreCentroDeportivo }}</td>
											<td>{{ $entrenadorCentroDeportivo->nivelcdag->nivelCDAG }}</td>
											<td>{{ $entrenadorCentroDeportivo->contrato->nombreContrato }}</td>

                                            <td>
                                                <form action="{{ route('entrenador-centro-deportivos.destroy',$entrenadorCentroDeportivo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('entrenador-centro-deportivos.show',$entrenadorCentroDeportivo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('entrenador-centro-deportivos.edit',$entrenadorCentroDeportivo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $entrenadorCentroDeportivos->links() !!}
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

