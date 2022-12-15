<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre del Factor') }}
            {{ Form::text('nombreFactor', $factorEmocionalSensorial->nombreFactor, ['class' => 'form-control' . ($errors->has('nombreFactor') ? ' is-invalid' : ''), 'placeholder' => 'Nombrefactor']) }}
            {!! $errors->first('nombreFactor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>