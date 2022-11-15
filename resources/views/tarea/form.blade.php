<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idReporte') }}
            {{ Form::text('idReporte', $tarea->idReporte, ['class' => 'form-control' . ($errors->has('idReporte') ? ' is-invalid' : ''), 'placeholder' => 'Idreporte']) }}
            {!! $errors->first('idReporte', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tarea') }}
            {{ Form::text('tarea', $tarea->tarea, ['class' => 'form-control' . ($errors->has('tarea') ? ' is-invalid' : ''), 'placeholder' => 'Tarea']) }}
            {!! $errors->first('tarea', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaInicial') }}
            {{ Form::text('fechaInicial', $tarea->fechaInicial, ['class' => 'form-control' . ($errors->has('fechaInicial') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicial']) }}
            {!! $errors->first('fechaInicial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaFinal') }}
            {{ Form::text('fechaFinal', $tarea->fechaFinal, ['class' => 'form-control' . ($errors->has('fechaFinal') ? ' is-invalid' : ''), 'placeholder' => 'Fechafinal']) }}
            {!! $errors->first('fechaFinal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora') }}
            {{ Form::text('hora', $tarea->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>