<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idAtleta') }}
            {{ Form::text('idAtleta', $inscripcion->idAtleta, ['class' => 'form-control' . ($errors->has('idAtleta') ? ' is-invalid' : ''), 'placeholder' => 'Idatleta']) }}
            {!! $errors->first('idAtleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso') }}
            {{ Form::text('peso', $inscripcion->peso, ['class' => 'form-control' . ($errors->has('peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('altura') }}
            {{ Form::text('altura', $inscripcion->altura, ['class' => 'form-control' . ($errors->has('altura') ? ' is-invalid' : ''), 'placeholder' => 'Altura']) }}
            {!! $errors->first('altura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEncargado') }}
            {{ Form::text('idEncargado', $inscripcion->idEncargado, ['class' => 'form-control' . ($errors->has('idEncargado') ? ' is-invalid' : ''), 'placeholder' => 'Idencargado']) }}
            {!! $errors->first('idEncargado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fotografia') }}
            {{ Form::text('fotografia', $inscripcion->fotografia, ['class' => 'form-control' . ($errors->has('fotografia') ? ' is-invalid' : ''), 'placeholder' => 'Fotografia']) }}
            {!! $errors->first('fotografia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaInscripcion') }}
            {{ Form::text('fechaInscripcion', $inscripcion->fechaInscripcion, ['class' => 'form-control' . ($errors->has('fechaInscripcion') ? ' is-invalid' : ''), 'placeholder' => 'Fechainscripcion']) }}
            {!! $errors->first('fechaInscripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $inscripcion->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMunicipioReside') }}
            {{ Form::text('idMunicipioReside', $inscripcion->idMunicipioReside, ['class' => 'form-control' . ($errors->has('idMunicipioReside') ? ' is-invalid' : ''), 'placeholder' => 'Idmunicipioreside']) }}
            {!! $errors->first('idMunicipioReside', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>