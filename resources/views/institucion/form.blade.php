<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipoInstitucion') }}
            {{ Form::text('tipoInstitucion', $institucion->tipoInstitucion, ['class' => 'form-control' . ($errors->has('tipoInstitucion') ? ' is-invalid' : ''), 'placeholder' => 'Tipoinstitucion']) }}
            {!! $errors->first('tipoInstitucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>