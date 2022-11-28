<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    {{ Form::label('nivelFADN') }}
                    {{ Form::text('nivelFADN', $nivelFadn->nivelFADN, ['class' => 'form-control' . ($errors->has('nivelFADN') ? ' is-invalid' : ''), 'placeholder' => 'Nivel de FADN']) }}
                    {!! $errors->first('nivelFADN', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Enviar</button>
        <a class="btn btn-primary" href="{{ route('nivel-fadns.index') }}"> Regresar</a>
    </div>
</div>