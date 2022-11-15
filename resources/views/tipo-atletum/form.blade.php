<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipoAtleta') }}
            {{ Form::text('tipoAtleta', $tipoAtletum->tipoAtleta, ['class' => 'form-control' . ($errors->has('tipoAtleta') ? ' is-invalid' : ''), 'placeholder' => 'Tipoatleta']) }}
            {!! $errors->first('tipoAtleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>