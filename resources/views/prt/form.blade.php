<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombrePRT') }}
            {{ Form::text('nombrePRT', $prt->nombrePRT, ['class' => 'form-control' . ($errors->has('nombrePRT') ? ' is-invalid' : ''), 'placeholder' => 'Nombreprt']) }}
            {!! $errors->first('nombrePRT', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>