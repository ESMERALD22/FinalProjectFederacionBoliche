@extends('layouts.app')

@section('template_title')
    Entrenador Centro Deportivo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Entrenador Centro Deportivo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('entrenador-centro-deportivos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Identrenador</th>
										<th>Foto</th>
										<th>Correo</th>
										<th>Nivelacademico</th>
										<th>Añosexperiencia</th>
										<th>Idfadn</th>
										<th>Idnivelfadn</th>
										<th>Idcentrodeportivo</th>
										<th>Idnivelcdag</th>
										<th>Idcontrato</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($entrenadorCentroDeportivos as $entrenadorCentroDeportivo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $entrenadorCentroDeportivo->idEntrenador }}</td>
											<td>{{ $entrenadorCentroDeportivo->foto }}</td>
											<td>{{ $entrenadorCentroDeportivo->correo }}</td>
											<td>{{ $entrenadorCentroDeportivo->nivelAcademico }}</td>
											<td>{{ $entrenadorCentroDeportivo->añosExperiencia }}</td>
											<td>{{ $entrenadorCentroDeportivo->idFADN }}</td>
											<td>{{ $entrenadorCentroDeportivo->idNivelFADN }}</td>
											<td>{{ $entrenadorCentroDeportivo->idCentroDeportivo }}</td>
											<td>{{ $entrenadorCentroDeportivo->idNivelCDAG }}</td>
											<td>{{ $entrenadorCentroDeportivo->idContrato }}</td>

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
@endsection
