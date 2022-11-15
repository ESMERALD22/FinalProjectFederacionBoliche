@extends('layouts.app')

@section('template_title')
    {{ $centroDeportivo->name ?? 'Show Centro Deportivo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Centro Deportivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('centro-deportivos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombrecentrodeportivo:</strong>
                            {{ $centroDeportivo->nombreCentroDeportivo }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $centroDeportivo->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Implementacion:</strong>
                            {{ $centroDeportivo->implementacion }}
                        </div>
                        <div class="form-group">
                            <strong>Accesibilidad:</strong>
                            {{ $centroDeportivo->accesibilidad }}
                        </div>
                        <div class="form-group">
                            <strong>Idfadn:</strong>
                            {{ $centroDeportivo->idFADN }}
                        </div>
                        <div class="form-group">
                            <strong>Idinstitucion:</strong>
                            {{ $centroDeportivo->idInstitucion }}
                        </div>
                        <div class="form-group">
                            <strong>Espaciofisico:</strong>
                            {{ $centroDeportivo->espacioFisico }}
                        </div>
                        <div class="form-group">
                            <strong>Idmunicipio:</strong>
                            {{ $centroDeportivo->idMunicipio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
