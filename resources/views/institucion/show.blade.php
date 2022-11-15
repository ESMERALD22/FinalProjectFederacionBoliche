@extends('layouts.app')

@section('template_title')
    {{ $institucion->name ?? 'Show Institucion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Institucion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('institucions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipoinstitucion:</strong>
                            {{ $institucion->tipoInstitucion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
