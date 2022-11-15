@extends('layouts.app')

@section('template_title')
    Horario Atencion Centro Deportivo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Horario Atencion Centro Deportivo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('horario-atencion-centro-deportivos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idcentrodeportivo</th>
										<th>Dia</th>
										<th>Horaapertura</th>
										<th>Horacierre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($horarioAtencionCentroDeportivos as $horarioAtencionCentroDeportivo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $horarioAtencionCentroDeportivo->idCentroDeportivo }}</td>
											<td>{{ $horarioAtencionCentroDeportivo->dia }}</td>
											<td>{{ $horarioAtencionCentroDeportivo->horaApertura }}</td>
											<td>{{ $horarioAtencionCentroDeportivo->horaCierre }}</td>

                                            <td>
                                                <form action="{{ route('horario-atencion-centro-deportivos.destroy',$horarioAtencionCentroDeportivo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('horario-atencion-centro-deportivos.show',$horarioAtencionCentroDeportivo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('horario-atencion-centro-deportivos.edit',$horarioAtencionCentroDeportivo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $horarioAtencionCentroDeportivos->links() !!}
            </div>
        </div>
    </div>
@endsection
