<div class="box box-info padding-1">
    <div class="box-body">
        
      
        <div class="form-group">
            {{ Form::label('cui') }}
            {{ Form::text('cui', $psicologo->cui, ['class' => 'form-control' . ($errors->has('cui') ? ' is-invalid' : ''), 'placeholder' => 'Cui']) }}
            {!! $errors->first('cui', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre1') }}
            {{ Form::text('nombre1', $psicologo->nombre1, ['class' => 'form-control' . ($errors->has('nombre1') ? ' is-invalid' : ''), 'placeholder' => 'Nombre1']) }}
            {!! $errors->first('nombre1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre2') }}
            {{ Form::text('nombre2', $psicologo->nombre2, ['class' => 'form-control' . ($errors->has('nombre2') ? ' is-invalid' : ''), 'placeholder' => 'Nombre2']) }}
            {!! $errors->first('nombre2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido1') }}
            {{ Form::text('apellido1', $psicologo->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Apellido1']) }}
            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido2') }}
            {{ Form::text('apellido2', $psicologo->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Apellido2']) }}
            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoDeCasada') }}
            {{ Form::text('apellidoDeCasada', $psicologo->apellidoDeCasada, ['class' => 'form-control' . ($errors->has('apellidoDeCasada') ? ' is-invalid' : ''), 'placeholder' => 'Apellidodecasada']) }}
            {!! $errors->first('apellidoDeCasada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaNaciemiento') }}
            {{ Form::date('fechaNaciemiento', $psicologo->fechaNaciemiento, ['class' => 'form-control' . ($errors->has('fechaNaciemiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechanaciemiento']) }}
            {!! $errors->first('fechaNaciemiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefonodecasa') }}
            {{ Form::text('telefonodecasa', $psicologo->telefonodecasa, ['class' => 'form-control' . ($errors->has('telefonodecasa') ? ' is-invalid' : ''), 'placeholder' => 'Telefonodecasa']) }}
            {!! $errors->first('telefonodecasa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular') }}
            {{ Form::text('celular', $psicologo->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::text('genero', $psicologo->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $psicologo->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMunicipio') }}
            {{ Form::text('idMunicipio', $psicologo->idMunicipio, ['class' => 'form-control' . ($errors->has('idMunicipio') ? ' is-invalid' : ''), 'placeholder' => 'Idmunicipio']) }}
            {!! $errors->first('idMunicipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>