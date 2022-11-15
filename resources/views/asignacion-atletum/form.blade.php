<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idAtleta') }}
            {{ Form::text('idAtleta', $asignacionAtletum->idAtleta, ['class' => 'form-control' . ($errors->has('idAtleta') ? ' is-invalid' : ''), 'placeholder' => 'Idatleta']) }}
            {!! $errors->first('idAtleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCategoria') }}
            {{ Form::text('idCategoria', $asignacionAtletum->idCategoria, ['class' => 'form-control' . ($errors->has('idCategoria') ? ' is-invalid' : ''), 'placeholder' => 'Idcategoria']) }}
            {!! $errors->first('idCategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPRT') }}
            {{ Form::text('idPRT', $asignacionAtletum->idPRT, ['class' => 'form-control' . ($errors->has('idPRT') ? ' is-invalid' : ''), 'placeholder' => 'Idprt']) }}
            {!! $errors->first('idPRT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idLineaDesarrollo') }}
            {{ Form::text('idLineaDesarrollo', $asignacionAtletum->idLineaDesarrollo, ['class' => 'form-control' . ($errors->has('idLineaDesarrollo') ? ' is-invalid' : ''), 'placeholder' => 'Idlineadesarrollo']) }}
            {!! $errors->first('idLineaDesarrollo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCentroDeportivo') }}
            {{ Form::text('idCentroDeportivo', $asignacionAtletum->idCentroDeportivo, ['class' => 'form-control' . ($errors->has('idCentroDeportivo') ? ' is-invalid' : ''), 'placeholder' => 'Idcentrodeportivo']) }}
            {!! $errors->first('idCentroDeportivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idFADN') }}
            {{ Form::text('idFADN', $asignacionAtletum->idFADN, ['class' => 'form-control' . ($errors->has('idFADN') ? ' is-invalid' : ''), 'placeholder' => 'Idfadn']) }}
            {!! $errors->first('idFADN', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEtapaDeportiva') }}
            {{ Form::text('idEtapaDeportiva', $asignacionAtletum->idEtapaDeportiva, ['class' => 'form-control' . ($errors->has('idEtapaDeportiva') ? ' is-invalid' : ''), 'placeholder' => 'Idetapadeportiva']) }}
            {!! $errors->first('idEtapaDeportiva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEntrenador') }}
            {{ Form::text('idEntrenador', $asignacionAtletum->idEntrenador, ['class' => 'form-control' . ($errors->has('idEntrenador') ? ' is-invalid' : ''), 'placeholder' => 'Identrenador']) }}
            {!! $errors->first('idEntrenador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('experienciaDeportivaYears') }}
            {{ Form::text('experienciaDeportivaYears', $asignacionAtletum->experienciaDeportivaYears, ['class' => 'form-control' . ($errors->has('experienciaDeportivaYears') ? ' is-invalid' : ''), 'placeholder' => 'Experienciadeportivayears']) }}
            {!! $errors->first('experienciaDeportivaYears', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('experienciaDeportivaMeses') }}
            {{ Form::text('experienciaDeportivaMeses', $asignacionAtletum->experienciaDeportivaMeses, ['class' => 'form-control' . ($errors->has('experienciaDeportivaMeses') ? ' is-invalid' : ''), 'placeholder' => 'Experienciadeportivameses']) }}
            {!! $errors->first('experienciaDeportivaMeses', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('practicante') }}
            {{ Form::text('practicante', $asignacionAtletum->practicante, ['class' => 'form-control' . ($errors->has('practicante') ? ' is-invalid' : ''), 'placeholder' => 'Practicante']) }}
            {!! $errors->first('practicante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('federado') }}
            {{ Form::text('federado', $asignacionAtletum->federado, ['class' => 'form-control' . ($errors->has('federado') ? ' is-invalid' : ''), 'placeholder' => 'Federado']) }}
            {!! $errors->first('federado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modalidad') }}
            {{ Form::text('modalidad', $asignacionAtletum->modalidad, ['class' => 'form-control' . ($errors->has('modalidad') ? ' is-invalid' : ''), 'placeholder' => 'Modalidad']) }}
            {!! $errors->first('modalidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('adaptado') }}
            {{ Form::text('adaptado', $asignacionAtletum->adaptado, ['class' => 'form-control' . ($errors->has('adaptado') ? ' is-invalid' : ''), 'placeholder' => 'Adaptado']) }}
            {!! $errors->first('adaptado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTipoAtleta') }}
            {{ Form::text('idTipoAtleta', $asignacionAtletum->idTipoAtleta, ['class' => 'form-control' . ($errors->has('idTipoAtleta') ? ' is-invalid' : ''), 'placeholder' => 'Idtipoatleta']) }}
            {!! $errors->first('idTipoAtleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>