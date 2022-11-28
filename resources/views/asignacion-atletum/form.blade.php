<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Atleta') }}
            {{ Form::select('idAtleta', $AtletaDatosPersonale, $asignacionAtletum->idAtleta, ['class' => 'form-control' . ($errors->has('idAtleta') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Atleta']) }}
            {!! $errors->first('idAtleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoria') }}
            {{ Form::select('idCategoria',$Categorium, $asignacionAtletum->idCategoria, ['class' => 'form-control' . ($errors->has('idCategoria') ? ' is-invalid' : ''), 'placeholder' => 'Selecccionar Categoria']) }}
            {!! $errors->first('idCategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PRT') }}
            {{ Form::select('idPRT',$PRT, $asignacionAtletum->idPRT, ['class' => 'form-control' . ($errors->has('idPRT') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar PRT']) }}
            {!! $errors->first('idPRT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Linea Desarrollo') }}
            {{ Form::select('idLineaDesarrollo',$LD, $asignacionAtletum->idLineaDesarrollo, ['class' => 'form-control' . ($errors->has('idLineaDesarrollo') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar linea desarrollo']) }}
            {!! $errors->first('idLineaDesarrollo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Centro Deportivo') }}
            {{ Form::select('idCentroDeportivo',$CD, $asignacionAtletum->idCentroDeportivo, ['class' => 'form-control' . ($errors->has('idCentroDeportivo') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Centro deportivo']) }}
            {!! $errors->first('idCentroDeportivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FADN') }}
            {{ Form::select('idFADN',$FADN, $asignacionAtletum->idFADN, ['class' => 'form-control' . ($errors->has('idFADN') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar FADN']) }}
            {!! $errors->first('idFADN', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Etapa Deportiva') }}
            {{ Form::select('idEtapaDeportiva',$ET, $asignacionAtletum->idEtapaDeportiva, ['class' => 'form-control' . ($errors->has('idEtapaDeportiva') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar etapa deportiva']) }}
            {!! $errors->first('idEtapaDeportiva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Entrenador') }}
            {{ Form::select('idEntrenador',$Entrenador, $asignacionAtletum->idEntrenador, ['class' => 'form-control' . ($errors->has('idEntrenador') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar entrenador']) }}
            {!! $errors->first('idEntrenador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Experiencia Deportiva Años') }}
            {{ Form::text('experienciaDeportivaYears', $asignacionAtletum->experienciaDeportivaYears, ['class' => 'form-control' . ($errors->has('experienciaDeportivaYears') ? ' is-invalid' : ''), 'placeholder' => 'Experiencia deportiva años']) }}
            {!! $errors->first('experienciaDeportivaYears', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Experiencia Deportiva Meses') }}
            {{ Form::text('experienciaDeportivaMeses', $asignacionAtletum->experienciaDeportivaMeses, ['class' => 'form-control' . ($errors->has('experienciaDeportivaMeses') ? ' is-invalid' : ''), 'placeholder' => 'Experiencia deportiva meses']) }}
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
            {{ Form::label('Tipo Atleta') }}
            {{ Form::select('idTipoAtleta',$tipo, $asignacionAtletum->idTipoAtleta, ['class' => 'form-control' . ($errors->has('idTipoAtleta') ? ' is-invalid' : ''), 'placeholder' => 'Sleccionar tipo atleta']) }}
            {!! $errors->first('idTipoAtleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>