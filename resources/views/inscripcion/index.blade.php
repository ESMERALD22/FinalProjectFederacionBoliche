@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')

@section('content_header')        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Inscripcion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inscripcions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('NUEVA INSCRIPCION') }}
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
										<th>Peso</th>
										<th>Altura</th>
										<th>Encargado</th>
										<th>Fotografia</th>
										<th>Fechainscripcion</th>
										<th>Direccion</th>
										<th>Idmunicipioreside</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscripcions as $inscripcion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $inscripcion->idAtleta }}</td>
											<td>{{ $inscripcion->peso }}</td>
											<td>{{ $inscripcion->altura }}</td>
											<td>{{ $inscripcion->idEncargado }}</td>
											<td>{{ $inscripcion->fotografia }}</td>
											<td>{{ $inscripcion->fechaInscripcion }}</td>
											<td>{{ $inscripcion->direccion }}</td>
											<td>{{ $inscripcion->idMunicipioReside }}</td>

                                            <td>
                                                <form action="{{ route('inscripcions.destroy',$inscripcion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inscripcions.show',$inscripcion->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inscripcions.edit',$inscripcion->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $inscripcions->links() !!}
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
