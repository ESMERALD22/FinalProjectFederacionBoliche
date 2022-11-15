@extends('layouts.app')

@section('template_title')
    {{ $entrenadorCentroDeportivo->name ?? 'Show Entrenador Centro Deportivo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Entrenador Centro Deportivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('entrenador-centro-deportivos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Identrenador:</strong>
                            {{ $entrenadorCentroDeportivo->idEntrenador }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $entrenadorCentroDeportivo->foto }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $entrenadorCentroDeportivo->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Nivelacademico:</strong>
                            {{ $entrenadorCentroDeportivo->nivelAcademico }}
                        </div>
                        <div class="form-group">
                            <strong>Añosexperiencia:</strong>
                            {{ $entrenadorCentroDeportivo->añosExperiencia }}
                        </div>
                        <div class="form-group">
                            <strong>Idfadn:</strong>
                            {{ $entrenadorCentroDeportivo->idFADN }}
                        </div>
                        <div class="form-group">
                            <strong>Idnivelfadn:</strong>
                            {{ $entrenadorCentroDeportivo->idNivelFADN }}
                        </div>
                        <div class="form-group">
                            <strong>Idcentrodeportivo:</strong>
                            {{ $entrenadorCentroDeportivo->idCentroDeportivo }}
                        </div>
                        <div class="form-group">
                            <strong>Idnivelcdag:</strong>
                            {{ $entrenadorCentroDeportivo->idNivelCDAG }}
                        </div>
                        <div class="form-group">
                            <strong>Idcontrato:</strong>
                            {{ $entrenadorCentroDeportivo->idContrato }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
