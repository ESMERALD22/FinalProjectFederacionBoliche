@extends('adminlte::page')

@section('title', 'Horarios de atención')
@section('content_header')

@section('content_header') 
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Horario de atención de centro deportivo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('horario-atencion-cds.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar nuevo horario') }}
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
                                        
										<th>Centro deportivo</th>
										<th>Día</th>
										<th>Hora de apertura</th>
										<th>Hora de cierre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($horarioAtencionCds as $horarioAtencionCd)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $horarioAtencionCd->centroDeportivo->nombreCentroDeportivo }}</td>
											<td>{{ $horarioAtencionCd->dia }}</td>
											<td>{{ $horarioAtencionCd->horaApertura }}</td>
											<td>{{ $horarioAtencionCd->horaCierre }}</td>

                                            <td>
                                                <form action="{{ route('horario-atencion-cds.destroy',$horarioAtencionCd->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('horario-atencion-cds.show',$horarioAtencionCd->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('horario-atencion-cds.edit',$horarioAtencionCd->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $horarioAtencionCds->links() !!}
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

