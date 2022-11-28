<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    {{ Form::label('nombreFADN') }}
                    {{ Form::text('nombreFADN', $fadn->nombreFADN, ['class' => 'form-control' . ($errors->has('nombreFADN') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del FADN']) }}
                    {!! $errors->first('nombreFADN', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Enviar</button>
        <a class="btn btn-primary" href="{{ route('fadns.index') }}"> Regresar</a>
    </div>
</div>