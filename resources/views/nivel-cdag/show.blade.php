@extends('layouts.app')

@section('template_title')
    {{ $nivelCdag->name ?? 'Show Nivel Cdag' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Nivel Cdag</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('nivel-cdags.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nivelcdag:</strong>
                            {{ $nivelCdag->nivelCDAG }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
