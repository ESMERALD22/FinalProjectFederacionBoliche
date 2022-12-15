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
                                {{ __('Psicologo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('psicologos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear psicologo') }}
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
                                        
										<th>Id</th>
										<th>CUI</th>
										<th>1ER NOMBRE</th>
										<th>2DO NOMBRE</th>
										<th>1ER APELLIDO</th>
										<th>2DO APELLIDO</th>
										<th>APELLIDO DE CASADA</th>
										<th>FECHA DE NACIMIENTO</th>
										<th>TELEFONO DE CASA</th>
										<th>CELULAR</th>
										<th>GENERO</th>
										<th>DIRECCION</th>
										<th>MUNICIPIO</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($psicologos as $psicologo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $psicologo->idpsicologo }}</td>
											<td>{{ $psicologo->cui }}</td>
											<td>{{ $psicologo->nombre1 }}</td>
											<td>{{ $psicologo->nombre2 }}</td>
											<td>{{ $psicologo->apellido1 }}</td>
											<td>{{ $psicologo->apellido2 }}</td>
											<td>{{ $psicologo->apellidoDeCasada }}</td>
											<td>{{ $psicologo->fechaNaciemiento }}</td>
											<td>{{ $psicologo->telefonodecasa }}</td>
											<td>{{ $psicologo->celular }}</td>
											<td>{{ $psicologo->genero }}</td>
											<td>{{ $psicologo->direccion }}</td>
											<td>{{ $psicologo->idMunicipio }}</td>

                                            <td>
                                                <form action="{{ route('psicologos.destroy',$psicologo->idpsicologo ) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('psicologos.show',$psicologo->idpsicologo ) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('psicologos.edit',$psicologo->idpsicologo ) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $psicologos->links() !!}
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
