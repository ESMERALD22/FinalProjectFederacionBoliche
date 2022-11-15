@extends('layouts.app')

@section('template_title')
    {{ $horarioAtencionCentroDeportivo->name ?? 'Show Horario Atencion Centro Deportivo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Horario Atencion Centro Deportivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horario-atencion-centro-deportivos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcentrodeportivo:</strong>
                            {{ $horarioAtencionCentroDeportivo->idCentroDeportivo }}
                        </div>
                        <div class="form-group">
                            <strong>Dia:</strong>
                            {{ $horarioAtencionCentroDeportivo->dia }}
                        </div>
                        <div class="form-group">
                            <strong>Horaapertura:</strong>
                            {{ $horarioAtencionCentroDeportivo->horaApertura }}
                        </div>
                        <div class="form-group">
                            <strong>Horacierre:</strong>
                            {{ $horarioAtencionCentroDeportivo->horaCierre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
