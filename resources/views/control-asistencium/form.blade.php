<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ATLETAS') }}
            {{ Form::select('idAtleta',$atletas->id, $controlAsistencium->idAtleta, ['class' => 'form-control' . ($errors->has('idAtleta') ? ' is-invalid' : ''), 'placeholder' => 'Atleta']) }}
            
            {!! $errors->first('idAtleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FECHA') }}
            {{ Form::date('fecha',today(), $controlAsistencium->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TIPO ASISTENCIA') }}
            {{ Form::select('idTipoAsistencia',$tiposA, $controlAsistencium->idTipoAsistencia, ['class' => 'form-control' . ($errors->has('idTipoAsistencia') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Asistencia']) }}
            {!! $errors->first('idTipoAsistencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>