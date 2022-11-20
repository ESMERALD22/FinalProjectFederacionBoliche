<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('CUI') }}
            {{ Form::number('cui', $atletaDatosPersonale->cui, ['class' => 'form-control' . ($errors->has('cui') ? ' is-invalid' : ''), 'placeholder' => 'CUI']) }}
            {!! $errors->first('cui', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PASAPORTE') }}
            {{ Form::text('pasaporte', $atletaDatosPersonale->pasaporte, ['class' => 'form-control' . ($errors->has('pasaporte') ? ' is-invalid' : ''), 'placeholder' => 'Pasaporte']) }}
            {!! $errors->first('pasaporte', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NIT') }}
            {{ Form::text('NIT', $atletaDatosPersonale->NIT, ['class' => 'form-control' . ($errors->has('NIT') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
            {!! $errors->first('NIT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PRIMER NOMBRE') }}
            {{ Form::text('nombre1', $atletaDatosPersonale->nombre1, ['class' => 'form-control' . ($errors->has('nombre1') ? ' is-invalid' : ''), 'placeholder' => 'Primer Nombre']) }}
            {!! $errors->first('nombre1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SEGUNDO NOMBRE') }}
            {{ Form::text('nombre2', $atletaDatosPersonale->nombre2, ['class' => 'form-control' . ($errors->has('nombre2') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Nombre']) }}
            {!! $errors->first('nombre2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PRIMER APELLIDO') }}
            {{ Form::text('apellido1', $atletaDatosPersonale->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Primer Apellido']) }}
            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SEGUNDO APELLIDO') }}
            {{ Form::text('apellido2', $atletaDatosPersonale->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Apellido']) }}
            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('APELLIDO DE CASADA') }}
            {{ Form::text('apellidoDeCasada', $atletaDatosPersonale->apellidoDeCasada, ['class' => 'form-control' . ($errors->has('apellidoDeCasada') ? ' is-invalid' : ''), 'placeholder' => 'Apellido d ecasada']) }}
            {!! $errors->first('apellidoDeCasada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FECHA DE NACIMIENTO') }}
            {{ Form::date('fechaNaciemiento', $atletaDatosPersonale->fechaNaciemiento, ['class' => 'form-control' . ($errors->has('fechaNaciemiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de nacimiento']) }}
            {!! $errors->first('fechaNaciemiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CELULAR') }}
            {{ Form::number('celular', $atletaDatosPersonale->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TELEFONO DE CASA') }}
            {{ Form::number('telefonodecasa', $atletaDatosPersonale->telefonodecasa, ['class' => 'form-control' . ($errors->has('telefonodecasa') ? ' is-invalid' : ''), 'placeholder' => 'Telefono de casa']) }}
            {!! $errors->first('telefonodecasa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('GENERO') }}
            {{ Form::select('genero',$genero, $atletaDatosPersonale->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MUNICIPIO DE NACIMIENTO') }}
            {{ Form::select('idMunicipio',$municipios, $atletaDatosPersonale->idMunicipio, ['class' => 'form-control' . ($errors->has('idMunicipio') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('idMunicipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DIRECCION') }}
            {{ Form::text('direccion', $atletaDatosPersonale->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CORREO') }}
            {{ Form::email('correo', $atletaDatosPersonale->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ESTADO CIVIL') }}
            {{ Form::select('estadoCivil',$estadoCivil, $atletaDatosPersonale->estadoCivil, ['class' => 'form-control' . ($errors->has('estadoCivil') ? ' is-invalid' : ''), 'placeholder' => 'Estado Civil']) }}
            {!! $errors->first('estadoCivil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ETNIA') }}
            {{ Form::text('etnia', $atletaDatosPersonale->etnia, ['class' => 'form-control' . ($errors->has('etnia') ? ' is-invalid' : ''), 'placeholder' => 'Etnia']) }}
            {!! $errors->first('etnia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ESCOLARIDAD') }}
            {{ Form::text('escolaridad', $atletaDatosPersonale->escolaridad, ['class' => 'form-control' . ($errors->has('escolaridad') ? ' is-invalid' : ''), 'placeholder' => 'Escolaridad']) }}
            {!! $errors->first('escolaridad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">REGISTRAR</button>
    </div>
</div>