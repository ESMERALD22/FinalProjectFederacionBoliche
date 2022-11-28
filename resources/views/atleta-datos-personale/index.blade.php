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
                                {{ __('Atleta Datos Personale') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('DeptoMun.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>CUI</th>
										<th>Pasaporte</th>
										<th>NIT</th>
										<th>1er Nombre</th>
										<th>2do Nombre</th>
										<th>1er Apellido</th>
										<th>2do Apellido</th>
										<th>Apellido de casada</th>
										<th>Fecha de nacimiento</th>
										<th>Celular</th>
										<th>Telefono de casa</th>
										<th>Genero</th>
										<th>Municipio</th>
										<th>Direccion</th>
										<th>Correo</th>
										<th>Estado civil</th>
										<th>Etnia</th>
										<th>Escolaridad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($atletaDatosPersonales as $atletaDatosPersonale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $atletaDatosPersonale->cui }}</td>
											<td>{{ $atletaDatosPersonale->pasaporte }}</td>
											<td>{{ $atletaDatosPersonale->NIT }}</td>
											<td>{{ $atletaDatosPersonale->nombre1 }}</td>
											<td>{{ $atletaDatosPersonale->nombre2 }}</td>
											<td>{{ $atletaDatosPersonale->apellido1 }}</td>
											<td>{{ $atletaDatosPersonale->apellido2 }}</td>
											<td>{{ $atletaDatosPersonale->apellidoDeCasada }}</td>
											<td>{{ $atletaDatosPersonale->fechaNaciemiento }}</td>
											<td>{{ $atletaDatosPersonale->celular }}</td>
											<td>{{ $atletaDatosPersonale->telefonodecasa }}</td>
											<td>{{ $atletaDatosPersonale->genero }}</td>
											<td>{{ $atletaDatosPersonale->idMunicipio }}</td>
											<td>{{ $atletaDatosPersonale->direccion }}</td>
											<td>{{ $atletaDatosPersonale->correo }}</td>
											<td>{{ $atletaDatosPersonale->estadoCivil }}</td>
											<td>{{ $atletaDatosPersonale->etnia }}</td>
											<td>{{ $atletaDatosPersonale->escolaridad }}</td>

                                            <td>
                                                <form action="{{ route('atleta-datos-personales.destroy',$atletaDatosPersonale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('atleta-datos-personales.show',$atletaDatosPersonale->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('atleta-datos-personales.edit',$atletaDatosPersonale->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $atletaDatosPersonales->links() !!}
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
