<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    {{ Form::label('nombre del centro deportivo') }}
                    {{ Form::text('nombreCentroDeportivo', $centroDeportivo->nombreCentroDeportivo, ['class' => 'form-control' . ($errors->has('nombreCentroDeportivo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del centro deportivo']) }}
                    {!! $errors->first('nombreCentroDeportivo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    {{ Form::label('dirección') }}
                    {{ Form::text('direccion', $centroDeportivo->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
                    {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    {{ Form::label('implementación') }}
                    {{ Form::text('implementacion', $centroDeportivo->implementacion, ['class' => 'form-control' . ($errors->has('implementacion') ? ' is-invalid' : ''), 'placeholder' => 'Implementación']) }}
                    {!! $errors->first('implementacion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('accesibilidad') }}
                    {{ Form::text('accesibilidad', $centroDeportivo->accesibilidad, ['class' => 'form-control' . ($errors->has('accesibilidad') ? ' is-invalid' : ''), 'placeholder' => 'Accesibilidad']) }}
                    {!! $errors->first('accesibilidad', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('FADN') }}
                    {{ Form::select('idFADN', $fadns ,$centroDeportivo->idFADN, ['class' => 'form-control' . ($errors->has('idFADN') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('idFADN', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    {{ Form::label('Institución') }}
                    {{ Form::select('idInstitucion', $instituciones ,$centroDeportivo->idInstitucion, ['class' => 'form-control' . ($errors->has('idInstitucion') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('idInstitucion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    {{ Form::label('Espacio físico') }}
                    {{ Form::text('espacioFisico', $centroDeportivo->espacioFisico, ['class' => 'form-control' . ($errors->has('espacioFisico') ? ' is-invalid' : ''), 'placeholder' => 'Espacio físico']) }}
                    {!! $errors->first('espacioFisico', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('Municipio') }}
                    {{ Form::select('idMunicipio', $municipios ,$centroDeportivo->idMunicipio, ['class' => 'form-control' . ($errors->has('idMunicipio') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('idMunicipio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Enviar</button>
        <a class="btn btn-primary" href="{{ route('centro-deportivos.index') }}"> Regresar</a>
    </div>
</div>