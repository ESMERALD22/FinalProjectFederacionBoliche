<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipoLineaDesarrollo') }}
            {{ Form::text('tipoLineaDesarrollo', $lineaDesarrollo->tipoLineaDesarrollo, ['class' => 'form-control' . ($errors->has('tipoLineaDesarrollo') ? ' is-invalid' : ''), 'placeholder' => 'Tipolineadesarrollo']) }}
            {!! $errors->first('tipoLineaDesarrollo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>