<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idCentroDeportivo') }}
            {{ Form::select('idCentroDeportivo', $centros ,$horarioAtencionCd->idCentroDeportivo, ['class' => 'form-control' . ($errors->has('idCentroDeportivo') ? ' is-invalid' : ''), 'placeholder' => 'Idcentrodeportivo']) }}
            {!! $errors->first('idCentroDeportivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dia') }}
            {{ Form::text('dia', $horarioAtencionCd->dia, ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {!! $errors->first('dia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horaApertura') }}
            {{ Form::text('horaApertura', $horarioAtencionCd->horaApertura, ['class' => 'form-control' . ($errors->has('horaApertura') ? ' is-invalid' : ''), 'placeholder' => 'Horaapertura']) }}
            {!! $errors->first('horaApertura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horaCierre') }}
            {{ Form::text('horaCierre', $horarioAtencionCd->horaCierre, ['class' => 'form-control' . ($errors->has('horaCierre') ? ' is-invalid' : ''), 'placeholder' => 'Horacierre']) }}
            {!! $errors->first('horaCierre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>