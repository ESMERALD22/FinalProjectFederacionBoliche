<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    {{ Form::label('nivelCDAG') }}
                    {{ Form::text('nivelCDAG', $nivelCdag->nivelCDAG, ['class' => 'form-control' . ($errors->has('nivelCDAG') ? ' is-invalid' : ''), 'placeholder' => 'Nivel de CDAG']) }}
                    {!! $errors->first('nivelCDAG', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Enviar</button>
        <a class="btn btn-primary" href="{{ route('nivel-cdags.index') }}"> Regresar</a>
    </div>
</div>