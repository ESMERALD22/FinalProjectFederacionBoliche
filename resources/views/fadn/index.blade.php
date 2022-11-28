@extends('adminlte::page')

@section('title', 'FADN')
@section('content_header')

@section('content_header')   
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Fadn') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('fadns.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar nuevo FADN') }}
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
                                        
										<th>Nombre de FADN</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fadns as $fadn)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $fadn->nombreFADN }}</td>

                                            <td>
                                                <form action="{{ route('fadns.destroy',$fadn->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('fadns.show',$fadn->id) }}"><i class="fa fa-fw fa-eye"></i> Ver </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('fadns.edit',$fadn->id) }}"><i class="fa fa-fw fa-edit"></i> Editar </a>
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
                {!! $fadns->links() !!}
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
