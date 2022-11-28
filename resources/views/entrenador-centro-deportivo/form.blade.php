<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    {{ Form::label('Entrenador') }}
                    {{ Form::select('idEntrenador', $entrenadores ,$entrenadorCentroDeportivo->idEntrenador, ['class' => 'form-control' . ($errors->has('idEntrenador') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('idEntrenador', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    {{ Form::label('nivel academico') }}
                    {{ Form::text('nivelAcademico', $entrenadorCentroDeportivo->nivelAcademico, ['class' => 'form-control' . ($errors->has('nivelAcademico') ? ' is-invalid' : ''), 'placeholder' => 'Nivel academico']) }}
                    {!! $errors->first('nivelAcademico', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    {{ Form::label('años de Experiencia') }}
                    {{ Form::number('añosExperiencia', $entrenadorCentroDeportivo->añosExperiencia, ['placeholder'=>'Años de experiencia','class' => 'form-control' . ($errors->has('añosExperiencia') ? ' is-invalid' : ''), 'min' => '0']) }}
                    {!! $errors->first('añosExperiencia', '<div class="invalid-feedback">:message</div>') !!}
                </div>

            </div>
            <div class="col-4">
            </div>
        </div>
        <div class="row align-items-end">
            <div class="col-2">
                <div class="form-group">
                    {{ Form::label('correo') }}
                    {{ Form::email('correo', $entrenadorCentroDeportivo->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                    {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    {{ Form::label('FADN') }}
                    {{ Form::select('idFADN', $fadns ,$entrenadorCentroDeportivo->idFADN, ['class' => 'form-control' . ($errors->has('idFADN') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('idFADN', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-3 ">
                <div class="form-group">
                    {{ Form::label('Nivel FADN') }}
                    {{ Form::select('idNivelFADN', $nivelfadns ,$entrenadorCentroDeportivo->idNivelFADN, ['class' => 'form-control' . ($errors->has('idNivelFADN') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('idNivelFADN', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('foto') }}
                    <br>
                    {{ Form::file('foto', $entrenadorCentroDeportivo->foto, ['class' => 'form-control' . ($errors->has('foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
                    {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('Centro deportivo') }}
                    {{ Form::select('idCentroDeportivo', $centrodeportivos ,$entrenadorCentroDeportivo->idCentroDeportivo, ['class' => 'form-control' . ($errors->has('idCentroDeportivo') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('idCentroDeportivo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('Nivel de CDAG') }}
                    {{ Form::select('idNivelCDAG', $nivelcdags ,$entrenadorCentroDeportivo->idNivelCDAG, ['class' => 'form-control' . ($errors->has('idNivelCDAG') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('idNivelCDAG', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    {{ Form::label('Contrato') }}
                    {{ Form::select('idContrato', $contratos  ,$entrenadorCentroDeportivo->idContrato, ['class' => 'form-control' . ($errors->has('idContrato') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('idContrato', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Enviar</button>
        <a class="btn btn-primary" href="{{ route('entrenador-centro-deportivos.index') }}"> Regresar</a>
    </div>
</div>