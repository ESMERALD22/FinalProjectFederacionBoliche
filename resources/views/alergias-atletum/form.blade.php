<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idAtleta') }}
            {{ Form::text('idAtleta', $alergiasAtletum->idAtleta, ['class' => 'form-control' . ($errors->has('idAtleta') ? ' is-invalid' : ''), 'placeholder' => 'Idatleta']) }}
            {!! $errors->first('idAtleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreAlergia') }}
            {{ Form::text('nombreAlergia', $alergiasAtletum->nombreAlergia, ['class' => 'form-control' . ($errors->has('nombreAlergia') ? ' is-invalid' : ''), 'placeholder' => 'Nombrealergia']) }}
            {!! $errors->first('nombreAlergia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>