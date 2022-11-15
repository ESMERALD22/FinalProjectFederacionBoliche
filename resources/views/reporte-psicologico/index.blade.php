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
                                {{ __('Reporte Psicologico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reporte-psicologicos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idlic</th>
										<th>Idatleta</th>
										<th>Fechahora</th>
										<th>Hora</th>
										<th>Numerosesion</th>
										<th>Impresionclinica</th>
										<th>Analisissemiologico</th>
										<th>Desarrollo</th>
										<th>Observaciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reportePsicologicos as $reportePsicologico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $reportePsicologico->idLic }}</td>
											<td>{{ $reportePsicologico->idAtleta }}</td>
											<td>{{ $reportePsicologico->fechaHora }}</td>
											<td>{{ $reportePsicologico->Hora }}</td>
											<td>{{ $reportePsicologico->numeroSesion }}</td>
											<td>{{ $reportePsicologico->impresionClinica }}</td>
											<td>{{ $reportePsicologico->analisisSemiologico }}</td>
											<td>{{ $reportePsicologico->desarrollo }}</td>
											<td>{{ $reportePsicologico->observaciones }}</td>

                                            <td>
                                                <form action="{{ route('reporte-psicologicos.destroy',$reportePsicologico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reporte-psicologicos.show',$reportePsicologico->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reporte-psicologicos.edit',$reportePsicologico->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $reportePsicologicos->links() !!}
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
