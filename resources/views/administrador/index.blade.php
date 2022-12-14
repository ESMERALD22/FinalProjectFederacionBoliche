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
                                {{ __('Administrador') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('administradors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Administrador') }}
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
                                        
										<th>CUI</th>
										<th>Nombre 1</th>
										<th>Nombre 2</th>
										<th>Apellido 1</th>
										<th>Apellido 2</th>
										<th>Apellido de casada</th>
										<th>Fecha de naciemiento</th>
										<th>Telefono de casa</th>
										<th>Celular</th>
										<th>Genero</th>
										<th>Municipio</th>
										<th>Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($administradors as $administrador)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $administrador->cui }}</td>
											<td>{{ $administrador->nombre1 }}</td>
											<td>{{ $administrador->nombre2 }}</td>
											<td>{{ $administrador->apellido1 }}</td>
											<td>{{ $administrador->apellido2 }}</td>
											<td>{{ $administrador->apellidoDeCasada }}</td>
											<td>{{ $administrador->fechaNaciemiento }}</td>
											<td>{{ $administrador->telefonodecasa }}</td>
											<td>{{ $administrador->celular }}</td>
											<td>{{ $administrador->genero }}</td>
											<td>{{ $administrador->municipio->municipio }}</td>
											<td>{{ $administrador->direccion }}</td>

                                            <td>
                                                <form action="{{ route('administradors.destroy',$administrador->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('administradors.show',$administrador->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('administradors.edit',$administrador->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $administradors->links() !!}
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
