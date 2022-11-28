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
							{{ __('Ficha1') }}
						</span>

						<div class="float-right">
							<a href="{{ route('DeptoMun.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
								{{ __('Crear Solicitud') }}
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
									<th>No. Solicitud</th>
									<th>CUI Aspirante</th>
									<th>Nombre</th>
									<th>CUI Encargado</th>
									<th>Nombres</th>
									<th>Estado</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach ($ficha1s as $ficha1)
								<tr>
									<td>{{ $ficha1->id }}</td>
									<td>{{ $ficha1->cuiAtleta }}</td>
									<td>{{ $ficha1->nombre1A . ' - ' .$ficha1->nombre2A . ' - ' .$ficha1->apellido1A . ' - ' .$ficha1->apellido2A }}</td>
									<td>{{ $ficha1->cuiEncargado }}</td>
									<td>{{ $ficha1->nombre1E . ' - ' . $ficha1->nombre2E  . ' - ' .$ficha1->apellido1E  . ' - ' .$ficha1->apellido2E}}</td>
									<td>
										@if($ficha1->estado == 0)
										Sin Aprobar
										@else
										Aprobado
										@endif
									</td>
									<td>
										<form action="{{ route('ficha1s.destroy',$ficha1->id) }}" method="POST">
											<a class="btn btn-sm btn-primary " href="{{ route('ficha1s.show',$ficha1->id) }}"><i class="fa fa-fw fa-eye"></i> Ver Ficha</a>
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar Ficha</button>
										</form>
									</td>
									<td>
										<form action="{{ route('relacionFAEI.create',$ficha1->id) }}" method="GET">
											<input type="hidden" id="uname" name="idFicha" value="{{$ficha1->id}}" readonly="true">
											<button type="submit" class="btn btn-sm btn-primary "><i class="fa fa-fw fa-book"></i>Aprobar Solicitud</button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			{!! $ficha1s->links() !!}
		</div>
	</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
	console.log('Hi!');
</script>
@stop