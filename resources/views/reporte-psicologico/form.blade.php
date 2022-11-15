<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idLic') }}
            {{ Form::text('idLic', $reportePsicologico->idLic, ['class' => 'form-control' . ($errors->has('idLic') ? ' is-invalid' : ''), 'placeholder' => 'Idlic']) }}
            {!! $errors->first('idLic', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idAtleta') }}
            {{ Form::text('idAtleta', $reportePsicologico->idAtleta, ['class' => 'form-control' . ($errors->has('idAtleta') ? ' is-invalid' : ''), 'placeholder' => 'Idatleta']) }}
            {!! $errors->first('idAtleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaHora') }}
            {{ Form::text('fechaHora', $reportePsicologico->fechaHora, ['class' => 'form-control' . ($errors->has('fechaHora') ? ' is-invalid' : ''), 'placeholder' => 'Fechahora']) }}
            {!! $errors->first('fechaHora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora') }}
            {{ Form::text('Hora', $reportePsicologico->Hora, ['class' => 'form-control' . ($errors->has('Hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('Hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numeroSesion') }}
            {{ Form::text('numeroSesion', $reportePsicologico->numeroSesion, ['class' => 'form-control' . ($errors->has('numeroSesion') ? ' is-invalid' : ''), 'placeholder' => 'Numerosesion']) }}
            {!! $errors->first('numeroSesion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('impresionClinica') }}
            {{ Form::text('impresionClinica', $reportePsicologico->impresionClinica, ['class' => 'form-control' . ($errors->has('impresionClinica') ? ' is-invalid' : ''), 'placeholder' => 'Impresionclinica']) }}
            {!! $errors->first('impresionClinica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('analisisSemiologico') }}
            {{ Form::text('analisisSemiologico', $reportePsicologico->analisisSemiologico, ['class' => 'form-control' . ($errors->has('analisisSemiologico') ? ' is-invalid' : ''), 'placeholder' => 'Analisissemiologico']) }}
            {!! $errors->first('analisisSemiologico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desarrollo') }}
            {{ Form::text('desarrollo', $reportePsicologico->desarrollo, ['class' => 'form-control' . ($errors->has('desarrollo') ? ' is-invalid' : ''), 'placeholder' => 'Desarrollo']) }}
            {!! $errors->first('desarrollo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $reportePsicologico->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>