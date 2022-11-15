<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nivelFADN') }}
            {{ Form::text('nivelFADN', $nivelFadn->nivelFADN, ['class' => 'form-control' . ($errors->has('nivelFADN') ? ' is-invalid' : ''), 'placeholder' => 'Nivelfadn']) }}
            {!! $errors->first('nivelFADN', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>