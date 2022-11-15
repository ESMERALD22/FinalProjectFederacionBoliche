<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nivelCDAG') }}
            {{ Form::text('nivelCDAG', $nivelCdag->nivelCDAG, ['class' => 'form-control' . ($errors->has('nivelCDAG') ? ' is-invalid' : ''), 'placeholder' => 'Nivelcdag']) }}
            {!! $errors->first('nivelCDAG', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>