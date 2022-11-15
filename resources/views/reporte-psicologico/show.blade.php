@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')

@section('content_header')      <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Reporte Psicologico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reporte-psicologicos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idlic:</strong>
                            {{ $reportePsicologico->idLic }}
                        </div>
                        <div class="form-group">
                            <strong>Idatleta:</strong>
                            {{ $reportePsicologico->idAtleta }}
                        </div>
                        <div class="form-group">
                            <strong>Fechahora:</strong>
                            {{ $reportePsicologico->fechaHora }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $reportePsicologico->Hora }}
                        </div>
                        <div class="form-group">
                            <strong>Numerosesion:</strong>
                            {{ $reportePsicologico->numeroSesion }}
                        </div>
                        <div class="form-group">
                            <strong>Impresionclinica:</strong>
                            {{ $reportePsicologico->impresionClinica }}
                        </div>
                        <div class="form-group">
                            <strong>Analisissemiologico:</strong>
                            {{ $reportePsicologico->analisisSemiologico }}
                        </div>
                        <div class="form-group">
                            <strong>Desarrollo:</strong>
                            {{ $reportePsicologico->desarrollo }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $reportePsicologico->observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
