<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre del tipo de Asistencia') }}
            {{ Form::text('tipoAsistencia', $tipoAsistencium->tipoAsistencia, ['class' => 'form-control' . ($errors->has('tipoAsistencia') ? ' is-invalid' : ''), 'placeholder' => 'Tipo De Asistencia']) }}
            {!! $errors->first('tipoAsistencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>