<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    {{ Form::label('nombreContrato') }}
                    {{ Form::text('nombreContrato', $contrato->nombreContrato, ['class' => 'form-control' . ($errors->has('nombreContrato') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del contrato']) }}
                    {!! $errors->first('nombreContrato', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Enviar</button>
        <a class="btn btn-primary" href="{{ route('contratos.index') }}"> Regresar</a>
    </div>
</div>