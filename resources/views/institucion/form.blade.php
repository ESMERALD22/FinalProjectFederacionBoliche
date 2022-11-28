<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    {{ Form::label('tipoInstitucion') }}
                    {{ Form::text('tipoInstitucion', $institucion->tipoInstitucion, ['class' => 'form-control' . ($errors->has('tipoInstitucion') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de institución']) }}
                    {!! $errors->first('tipoInstitucion', '<div class="invalid-feedback">:message</div>') !!}
                </div>

            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Enviar</button>
        <a class="btn btn-primary" href="{{ route('institucions.index') }}"> Regresar</a>
    </div>
</div>