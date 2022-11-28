<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('CUI ATLETA') }}
            {{ Form::number('cuiAtleta', $ficha1->cuiAtleta, ['class' => 'form-control' . ($errors->has('cuiAtleta') ? ' is-invalid' : ''), 'placeholder' => 'CUI']) }}
            {!! $errors->first('cuiAtleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PASAPORTE') }}
            <p>*En caso no tenga coloque 0</p>
            {{ Form::number('pasaporte', $ficha1->pasaporte, ['class' => 'form-control' . ($errors->has('pasaporte') ? ' is-invalid' : ''), 'placeholder' => 'Pasaporte']) }}
            {!! $errors->first('pasaporte', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NIT') }}
            {{ Form::number('NIT', $ficha1->NIT, ['class' => 'form-control' . ($errors->has('NIT') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
            {!! $errors->first('NIT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PRIMER NOMBRE') }}
            {{ Form::text('nombre1A', $ficha1->nombre1A, ['class' => 'form-control' . ($errors->has('nombre1A') ? ' is-invalid' : ''), 'placeholder' => '1er Nombre']) }}
            {!! $errors->first('nombre1A', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SEGUNDO NOMBRE') }}
            {{ Form::text('nombre2A', $ficha1->nombre2A, ['class' => 'form-control' . ($errors->has('nombre2A') ? ' is-invalid' : ''), 'placeholder' => '2do Nombre']) }}
            {!! $errors->first('nombre2A', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PRIMER APELLIDO') }}
            {{ Form::text('apellido1A', $ficha1->apellido1A, ['class' => 'form-control' . ($errors->has('apellido1A') ? ' is-invalid' : ''), 'placeholder' => '1er Apellido']) }}
            {!! $errors->first('apellido1A', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SEGUNDO APELLIDO') }}
            {{ Form::text('apellido2A', $ficha1->apellido2A, ['class' => 'form-control' . ($errors->has('apellido2A') ? ' is-invalid' : ''), 'placeholder' => '2do Apellido']) }}
            {!! $errors->first('apellido2A', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('APELLIDO DE CASADA') }}
            {{ Form::text('apellidoDeCasadaA', $ficha1->apellidoDeCasadaA, ['class' => 'form-control' . ($errors->has('apellidoDeCasadaA') ? ' is-invalid' : ''), 'placeholder' => 'Apellido de casada']) }}
            {!! $errors->first('apellidoDeCasadaA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FECHA DE NACIMIENTO') }}
            {{ Form::date('fechaNaciemientoA', $ficha1->fechaNaciemientoA, ['class' => 'form-control' . ($errors->has('fechaNaciemientoA') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de nacimiento']) }}
            {!! $errors->first('fechaNaciemientoA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NO. DE CELULAR') }}
            {{ Form::number('celularA', $ficha1->celularA, ['class' => 'form-control' . ($errors->has('celularA') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celularA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TELEFONO DE CASA') }}
            {{ Form::number('telefonodecasaA', $ficha1->telefonodecasaA, ['class' => 'form-control' . ($errors->has('telefonodecasaA') ? ' is-invalid' : ''), 'placeholder' => 'Telefono de casa']) }}
            {!! $errors->first('telefonodecasaA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('GENERO') }}
            {{ Form::select('generoA', $genero,$ficha1->generoA, ['class' => 'form-control' . ($errors->has('generoA') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('generoA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MUNICIPIO') }}
            {{ Form::select('idMunicipioA', $municipios, $ficha1->idMunicipioA, ['class' => 'form-control' . ($errors->has('idMunicipioA') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('idMunicipioA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DIRECCION') }}
            {{ Form::text('direccionA', $ficha1->direccionA, ['class' => 'form-control' . ($errors->has('direccionA') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccionA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CORREO') }}
            {{ Form::email('correoA', $ficha1->correoA, ['class' => 'form-control' . ($errors->has('correoA') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correoA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ESTADO CIVIL') }}
            {{ Form::select('estadoCivilA', $estadoCivil, $ficha1->estadoCivilA, ['class' => 'form-control' . ($errors->has('estadoCivilA') ? ' is-invalid' : ''), 'placeholder' => 'Estado civil']) }}
            {!! $errors->first('estadoCivilA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ETNIA') }}
            {{ Form::text('etniaA', $ficha1->etniaA, ['class' => 'form-control' . ($errors->has('etniaA') ? ' is-invalid' : ''), 'placeholder' => 'Etnia']) }}
            {!! $errors->first('etniaA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ESCOLARIDAD') }}
            {{ Form::text('escolaridadA', $ficha1->escolaridadA, ['class' => 'form-control' . ($errors->has('escolaridadA') ? ' is-invalid' : ''), 'placeholder' => 'Escolaridad']) }}
            {!! $errors->first('escolaridadA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FOTOGRAFIA') }}
            {{ Form::file('fotografiaA', $ficha1->fotografiaA, ['class' => 'form-control' . ($errors->has('fotografiaA') ? ' is-invalid' : ''), 'placeholder' => 'Fotografia']) }}
            {!! $errors->first('fotografiaA', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('ALTURA') }}
            {{ Form::text('alturaA', $ficha1->alturaA, ['class' => 'form-control' . ($errors->has('alturaA') ? ' is-invalid' : ''), 'placeholder' => 'Altura']) }}
            {!! $errors->first('alturaA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PESO') }}
            {{ Form::text('pesoA', $ficha1->pesoA, ['class' => 'form-control' . ($errors->has('pesoA') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('pesoA', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('ESTADO') }}
            {{ Form::select('estado',$estadoF,$ficha1->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CUI ENCARGADO') }}
            {{ Form::number('cuiEncargado', $ficha1->cuiEncargado, ['class' => 'form-control' . ($errors->has('cuiEncargado') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cuiEncargado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PRIMER NOMBRE') }}
            {{ Form::text('nombre1E', $ficha1->nombre1E, ['class' => 'form-control' . ($errors->has('nombre1E') ? ' is-invalid' : ''), 'placeholder' => '1er Nombre']) }}
            {!! $errors->first('nombre1E', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SEGUNDO NOMBRE') }}
            {{ Form::text('nombre2E', $ficha1->nombre2E, ['class' => 'form-control' . ($errors->has('nombre2E') ? ' is-invalid' : ''), 'placeholder' => '2do Nombre']) }}
            {!! $errors->first('nombre2E', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PRIMER APELLIDO') }}
            {{ Form::text('apellido1E', $ficha1->apellido1E, ['class' => 'form-control' . ($errors->has('apellido1E') ? ' is-invalid' : ''), 'placeholder' => '1er Apellido']) }}
            {!! $errors->first('apellido1E', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SEGUNDO APELLIDO') }}
            {{ Form::text('apellido2E', $ficha1->apellido2E, ['class' => 'form-control' . ($errors->has('apellido2E') ? ' is-invalid' : ''), 'placeholder' => '2do Apellido']) }}
            {!! $errors->first('apellido2E', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('APELLIDO DE CASADA') }}
            {{ Form::text('apellidoDeCasadaE', $ficha1->apellidoDeCasadaE, ['class' => 'form-control' . ($errors->has('apellidoDeCasadaE') ? ' is-invalid' : ''), 'placeholder' => 'Apellido de casada']) }}
            {!! $errors->first('apellidoDeCasadaE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FECHA DE NACIMIENTO') }}
            {{ Form::date('fechaNaciemientoE', $ficha1->fechaNaciemientoE, ['class' => 'form-control' . ($errors->has('fechaNaciemientoE') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de nacimiento']) }}
            {!! $errors->first('fechaNaciemientoE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TELEFONO DE CASA') }}
            {{ Form::number('telefonodecasaE', $ficha1->telefonodecasaE, ['class' => 'form-control' . ($errors->has('telefonodecasaE') ? ' is-invalid' : ''), 'placeholder' => 'Telefono de casa']) }}
            {!! $errors->first('telefonodecasaE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CELULAR') }}
            {{ Form::number('celularE', $ficha1->celularE, ['class' => 'form-control' . ($errors->has('celularE') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celularE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('GENERO') }}
            {{ Form::select('generoE',$genero, $ficha1->generoE, ['class' => 'form-control' . ($errors->has('generoE') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('generoE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DIRECCION') }}
            {{ Form::text('direccionE', $ficha1->direccionE, ['class' => 'form-control' . ($errors->has('direccionE') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccionE', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">GENERAR</button>
    </div>
</div>