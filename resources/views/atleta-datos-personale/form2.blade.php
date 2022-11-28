<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Seleccione departamento de nacimiento') }}
            {{ Form::select('id',$departamentos, $departamento->id, ['class' => 'form-control' . ($errors->has('id') ? ' is-invalid' : ''), 'placeholder' => 'Departamento']) }}
            {!! $errors->first('id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Continuar</button>
    </div>
</div>