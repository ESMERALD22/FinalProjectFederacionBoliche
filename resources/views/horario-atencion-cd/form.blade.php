<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    {{ Form::label('Centro deportivo') }}
                    {{ Form::select('idCentroDeportivo', $centros ,$horarioAtencionCd->idCentroDeportivo, ['class' => 'form-control' . ($errors->has('idCentroDeportivo') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('idCentroDeportivo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    {{ Form::label('día') }}
                    {{ Form::text('dia', $horarioAtencionCd->dia, ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Día']) }}
                    {!! $errors->first('dia', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('horaApertura') }}
                    {{ Form::time('horaApertura', $horarioAtencionCd->horaApertura, ['class' => 'form-control' . ($errors->has('horaApertura') ? ' is-invalid' : ''), 'value' => "12:00:00"]) }}
                    {!! $errors->first('horaApertura', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('horaCierre') }}
                    {{ Form::time('horaCierre', $horarioAtencionCd->horaCierre, ['class' => 'form-control' . ($errors->has('horaCierre') ? ' is-invalid' : ''), 'placeholder' => "12:00:00"]) }}
                    {!! $errors->first('horaCierre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Enviar</button>
        <a class="btn btn-primary" href="{{ route('horario-atencion-cds.index') }}"> Regresar</a>
    </div>
</div>