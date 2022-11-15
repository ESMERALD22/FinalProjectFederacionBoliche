<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idEntrenador') }}
            {{ Form::text('idEntrenador', $entrenadorCentroDeportivo->idEntrenador, ['class' => 'form-control' . ($errors->has('idEntrenador') ? ' is-invalid' : ''), 'placeholder' => 'Identrenador']) }}
            {!! $errors->first('idEntrenador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto') }}
            {{ Form::text('foto', $entrenadorCentroDeportivo->foto, ['class' => 'form-control' . ($errors->has('foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
            {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $entrenadorCentroDeportivo->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivelAcademico') }}
            {{ Form::text('nivelAcademico', $entrenadorCentroDeportivo->nivelAcademico, ['class' => 'form-control' . ($errors->has('nivelAcademico') ? ' is-invalid' : ''), 'placeholder' => 'Nivelacademico']) }}
            {!! $errors->first('nivelAcademico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('añosExperiencia') }}
            {{ Form::text('añosExperiencia', $entrenadorCentroDeportivo->añosExperiencia, ['class' => 'form-control' . ($errors->has('añosExperiencia') ? ' is-invalid' : ''), 'placeholder' => 'Añosexperiencia']) }}
            {!! $errors->first('añosExperiencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idFADN') }}
            {{ Form::text('idFADN', $entrenadorCentroDeportivo->idFADN, ['class' => 'form-control' . ($errors->has('idFADN') ? ' is-invalid' : ''), 'placeholder' => 'Idfadn']) }}
            {!! $errors->first('idFADN', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idNivelFADN') }}
            {{ Form::text('idNivelFADN', $entrenadorCentroDeportivo->idNivelFADN, ['class' => 'form-control' . ($errors->has('idNivelFADN') ? ' is-invalid' : ''), 'placeholder' => 'Idnivelfadn']) }}
            {!! $errors->first('idNivelFADN', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCentroDeportivo') }}
            {{ Form::text('idCentroDeportivo', $entrenadorCentroDeportivo->idCentroDeportivo, ['class' => 'form-control' . ($errors->has('idCentroDeportivo') ? ' is-invalid' : ''), 'placeholder' => 'Idcentrodeportivo']) }}
            {!! $errors->first('idCentroDeportivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idNivelCDAG') }}
            {{ Form::text('idNivelCDAG', $entrenadorCentroDeportivo->idNivelCDAG, ['class' => 'form-control' . ($errors->has('idNivelCDAG') ? ' is-invalid' : ''), 'placeholder' => 'Idnivelcdag']) }}
            {!! $errors->first('idNivelCDAG', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idContrato') }}
            {{ Form::text('idContrato', $entrenadorCentroDeportivo->idContrato, ['class' => 'form-control' . ($errors->has('idContrato') ? ' is-invalid' : ''), 'placeholder' => 'Idcontrato']) }}
            {!! $errors->first('idContrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>