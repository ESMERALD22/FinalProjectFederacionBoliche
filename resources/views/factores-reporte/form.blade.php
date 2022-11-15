<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idFactorEmocionalSensorial') }}
            {{ Form::text('idFactorEmocionalSensorial', $factoresReporte->idFactorEmocionalSensorial, ['class' => 'form-control' . ($errors->has('idFactorEmocionalSensorial') ? ' is-invalid' : ''), 'placeholder' => 'Idfactoremocionalsensorial']) }}
            {!! $errors->first('idFactorEmocionalSensorial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idReporte') }}
            {{ Form::text('idReporte', $factoresReporte->idReporte, ['class' => 'form-control' . ($errors->has('idReporte') ? ' is-invalid' : ''), 'placeholder' => 'Idreporte']) }}
            {!! $errors->first('idReporte', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puntuacion') }}
            {{ Form::text('puntuacion', $factoresReporte->puntuacion, ['class' => 'form-control' . ($errors->has('puntuacion') ? ' is-invalid' : ''), 'placeholder' => 'Puntuacion']) }}
            {!! $errors->first('puntuacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>