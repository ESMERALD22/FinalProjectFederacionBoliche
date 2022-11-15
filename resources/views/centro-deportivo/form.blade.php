<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreCentroDeportivo') }}
            {{ Form::text('nombreCentroDeportivo', $centroDeportivo->nombreCentroDeportivo, ['class' => 'form-control' . ($errors->has('nombreCentroDeportivo') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecentrodeportivo']) }}
            {!! $errors->first('nombreCentroDeportivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $centroDeportivo->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('implementacion') }}
            {{ Form::text('implementacion', $centroDeportivo->implementacion, ['class' => 'form-control' . ($errors->has('implementacion') ? ' is-invalid' : ''), 'placeholder' => 'Implementacion']) }}
            {!! $errors->first('implementacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('accesibilidad') }}
            {{ Form::text('accesibilidad', $centroDeportivo->accesibilidad, ['class' => 'form-control' . ($errors->has('accesibilidad') ? ' is-invalid' : ''), 'placeholder' => 'Accesibilidad']) }}
            {!! $errors->first('accesibilidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idFADN') }}
            {{ Form::text('idFADN', $centroDeportivo->idFADN, ['class' => 'form-control' . ($errors->has('idFADN') ? ' is-invalid' : ''), 'placeholder' => 'Idfadn']) }}
            {!! $errors->first('idFADN', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idInstitucion') }}
            {{ Form::text('idInstitucion', $centroDeportivo->idInstitucion, ['class' => 'form-control' . ($errors->has('idInstitucion') ? ' is-invalid' : ''), 'placeholder' => 'Idinstitucion']) }}
            {!! $errors->first('idInstitucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('espacioFisico') }}
            {{ Form::text('espacioFisico', $centroDeportivo->espacioFisico, ['class' => 'form-control' . ($errors->has('espacioFisico') ? ' is-invalid' : ''), 'placeholder' => 'Espaciofisico']) }}
            {!! $errors->first('espacioFisico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMunicipio') }}
            {{ Form::text('idMunicipio', $centroDeportivo->idMunicipio, ['class' => 'form-control' . ($errors->has('idMunicipio') ? ' is-invalid' : ''), 'placeholder' => 'Idmunicipio']) }}
            {!! $errors->first('idMunicipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>