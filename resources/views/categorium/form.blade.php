<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre Categoria') }}
            {{ Form::text('nombreCategoria', $categorium->nombreCategoria, ['class' => 'form-control' . ($errors->has('nombreCategoria') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecategoria']) }}
            {!! $errors->first('nombreCategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>