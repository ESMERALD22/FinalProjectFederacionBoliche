<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre PRT') }}
            {{ Form::text('nombrePRT', $prt->nombrePRT, ['class' => 'form-control' . ($errors->has('nombrePRT') ? ' is-invalid' : ''), 'placeholder' => 'Nombre PRT']) }}
            {!! $errors->first('nombrePRT', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>