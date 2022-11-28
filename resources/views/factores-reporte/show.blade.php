@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')

@section('content_header')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Factores Reporte</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('factores-reportes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idfactoremocionalsensorial:</strong>
                            {{ $factoresReporte->idFactorEmocionalSensorial }}
                        </div>
                        <div class="form-group">
                            <strong>Idreporte:</strong>
                            {{ $factoresReporte->idReporte }}
                        </div>
                        <div class="form-group">
                            <strong>Puntuacion:</strong>
                            {{ $factoresReporte->puntuacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')

@section('content_header')