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
                                {{ __('Factores Reporte') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('factores-reportes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idfactoremocionalsensorial</th>
										<th>Idreporte</th>
										<th>Puntuacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($factoresReportes as $factoresReporte)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $factoresReporte->idFactorEmocionalSensorial }}</td>
											<td>{{ $factoresReporte->idReporte }}</td>
											<td>{{ $factoresReporte->puntuacion }}</td>

                                            <td>
                                                <form action="{{ route('factores-reportes.destroy',$factoresReporte->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('factores-reportes.show',$factoresReporte->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('factores-reportes.edit',$factoresReporte->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $factoresReportes->links() !!}
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
