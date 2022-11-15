@extends('layouts.app')

@section('template_title')
    Entrenador Datos Personale
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Entrenador Datos Personale') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('entrenador-datos-personales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Cui</th>
										<th>Nombre1</th>
										<th>Nombre2</th>
										<th>Apellido1</th>
										<th>Apellido2</th>
										<th>Apellidodecasada</th>
										<th>Fechanaciemiento</th>
										<th>Telefonodecasa</th>
										<th>Celular</th>
										<th>Genero</th>
										<th>Idmunicipio</th>
										<th>Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($entrenadorDatosPersonales as $entrenadorDatosPersonale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $entrenadorDatosPersonale->cui }}</td>
											<td>{{ $entrenadorDatosPersonale->nombre1 }}</td>
											<td>{{ $entrenadorDatosPersonale->nombre2 }}</td>
											<td>{{ $entrenadorDatosPersonale->apellido1 }}</td>
											<td>{{ $entrenadorDatosPersonale->apellido2 }}</td>
											<td>{{ $entrenadorDatosPersonale->apellidoDeCasada }}</td>
											<td>{{ $entrenadorDatosPersonale->fechaNaciemiento }}</td>
											<td>{{ $entrenadorDatosPersonale->telefonodecasa }}</td>
											<td>{{ $entrenadorDatosPersonale->celular }}</td>
											<td>{{ $entrenadorDatosPersonale->genero }}</td>
											<td>{{ $entrenadorDatosPersonale->idMunicipio }}</td>
											<td>{{ $entrenadorDatosPersonale->direccion }}</td>

                                            <td>
                                                <form action="{{ route('entrenador-datos-personales.destroy',$entrenadorDatosPersonale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('entrenador-datos-personales.show',$entrenadorDatosPersonale->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('entrenador-datos-personales.edit',$entrenadorDatosPersonale->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $entrenadorDatosPersonales->links() !!}
            </div>
        </div>
    </div>
@endsection
