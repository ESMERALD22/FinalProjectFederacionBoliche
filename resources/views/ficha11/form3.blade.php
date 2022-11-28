<div class="box box-info padding-1">

    <div class="box-body">
        <h1 style="color:darkblue">
            <center>2.1 DATOS PERSONALES DEL ATLETA</center>
        </h1>
        <br>
        <h4>Por favor ingrese los datos que se le solicita.</h4>
        <div class="form-group">
            {{ Form::label('CUI') }}
            {{ Form::number('cuiAtleta', $ficha1->cuiAtleta, ['class' => 'form-control' . ($errors->has('cuiAtleta') ? ' is-invalid' : ''), 'placeholder' => 'CUI']) }}
            {!! $errors->first('cuiAtleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PASAPORTE ') }}
            <p>*En caso no tenga coloque 0</p>
            {{ Form::text('pasaporte', $ficha1->pasaporte, ['class' => 'form-control' . ($errors->has('pasaporte') ? ' is-invalid' : ''), 'placeholder' => 'Pasaporte']) }}
            {!! $errors->first('pasaporte', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NIT') }}
            <p>*En caso no tenga coloque 0</p>
            {{ Form::text('NIT', $ficha1->NIT, ['class' => 'form-control' . ($errors->has('NIT') ? ' is-invalid' : ''), 'placeholder' => 'NIT']) }}
            {!! $errors->first('NIT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PRIMER NOMBRE') }}
            {{ Form::text('nombre1A', $ficha1->nombre1A, ['class' => 'form-control' . ($errors->has('nombre1A') ? ' is-invalid' : ''), 'placeholder' => '1er. Nombre']) }}
            {!! $errors->first('nombre1A', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SEGUNDO NOMBRE') }}
            {{ Form::text('nombre2A', $ficha1->nombre2A, ['class' => 'form-control' . ($errors->has('nombre2A') ? ' is-invalid' : ''), 'placeholder' => '2do. Nombre']) }}
            {!! $errors->first('nombre2A', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PRIMER APELLIDO') }}
            {{ Form::text('apellido1A', $ficha1->apellido1A, ['class' => 'form-control' . ($errors->has('apellido1A') ? ' is-invalid' : ''), 'placeholder' => '1er. Apellido']) }}
            {!! $errors->first('apellido1A', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SEGUNDO APELLIDO') }}
            {{ Form::text('apellido2A', $ficha1->apellido2A, ['class' => 'form-control' . ($errors->has('apellido2A') ? ' is-invalid' : ''), 'placeholder' => '2do. Apellido']) }}
            {!! $errors->first('apellido2A', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('APELLIDO DE CASADA') }}
            <p>*En caso no tenga coloque: Sin dato </p>
            {{ Form::text('apellidoDeCasadaA', $ficha1->apellidoDeCasadaA, ['class' => 'form-control' . ($errors->has('apellidoDeCasadaA') ? ' is-invalid' : ''), 'placeholder' => 'Apellido de casada']) }}
            {!! $errors->first('apellidoDeCasadaA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FECHA DE NACIMIENTO') }}
            {{ Form::date('fechaNaciemientoA', $ficha1->fechaNaciemientoA, ['class' => 'form-control' . ($errors->has('fechaNaciemientoA') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de nacimiento']) }}
            {!! $errors->first('fechaNaciemientoA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NÚMERO DE CELULAR') }}
            {{ Form::number('celularA', $ficha1->celularA, ['class' => 'form-control' . ($errors->has('celularA') ? ' is-invalid' : ''), 'placeholder' => 'No. Celular']) }}
            {!! $errors->first('celularA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TELEFONO DE CASA') }}
            {{ Form::number('telefonodecasaA', $ficha1->telefonodecasaA, ['class' => 'form-control' . ($errors->has('telefonodecasaA') ? ' is-invalid' : ''), 'placeholder' => 'Telefono de casa']) }}
            {!! $errors->first('telefonodecasaA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('GENERO') }}
            {{ Form::select('generoA',$genero, $ficha1->generoA, ['class' => 'form-control' . ($errors->has('generoA') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('generoA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DIRECCION') }}
            {{ Form::text('direccionA', $ficha1->direccionA, ['class' => 'form-control' . ($errors->has('direccionA') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccionA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CORREO ELECTRONICO') }}
            {{ Form::email('correoA', $ficha1->correoA, ['class' => 'form-control' . ($errors->has('correoA') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correoA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ESTADO CIVIL') }}
            {{ Form::select('estadoCivilA', $estadoCivil,$ficha1->estadoCivilA, ['class' => 'form-control' . ($errors->has('estadoCivilA') ? ' is-invalid' : ''), 'placeholder' => 'Estado civil']) }}
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
            {{ Form::label('PESO') }}
            {{ Form::text('pesoA', $ficha1->pesoA, ['class' => 'form-control' . ($errors->has('pesoA') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('pesoA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ALTURA') }}
            {{ Form::text('alturaA', $ficha1->alturaA, ['class' => 'form-control' . ($errors->has('alturaA') ? ' is-invalid' : ''), 'placeholder' => 'Altura']) }}
            {!! $errors->first('alturaA', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>

    <div class="box-body">
        <h1 style="color:darkblue">
            <center>2.2 DATOS PERSONALES DEL ENCARGADO</center>
        </h1>
        <br>

        <div class="form-group">
            {{ Form::label('CUI DEL ENCARGADO') }}
            {{ Form::number('cuiEncargado', $ficha1->cuiEncargado, ['class' => 'form-control' . ($errors->has('cuiEncargado') ? ' is-invalid' : ''), 'placeholder' => 'CUI']) }}
            {!! $errors->first('cuiEncargado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PRIMER NOMBRE') }}
            {{ Form::text('nombre1E', $ficha1->nombre1E, ['class' => 'form-control' . ($errors->has('nombre1E') ? ' is-invalid' : ''), 'placeholder' => '1er. Nombre']) }}
            {!! $errors->first('nombre1E', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SEGUNDO NOMBRE') }}
            {{ Form::text('nombre2E', $ficha1->nombre2E, ['class' => 'form-control' . ($errors->has('nombre2E') ? ' is-invalid' : ''), 'placeholder' => '2do. Nombre']) }}
            {!! $errors->first('nombre2E', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PRIMER APELLIDO') }}
            {{ Form::text('apellido1E', $ficha1->apellido1E, ['class' => 'form-control' . ($errors->has('apellido1E') ? ' is-invalid' : ''), 'placeholder' => '1er. Apellido']) }}
            {!! $errors->first('apellido1E', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SEGUNDO APELLIDO') }}
            {{ Form::text('apellido2E', $ficha1->apellido2E, ['class' => 'form-control' . ($errors->has('apellido2E') ? ' is-invalid' : ''), 'placeholder' => '2do. Apellido']) }}
            {!! $errors->first('apellido2E', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('APELLIDO DE CASADA') }}
            <p>*En caso no tenga coloque: Sin dato </p>
            {{ Form::text('apellidoDeCasadaE', $ficha1->apellidoDeCasadaE, ['class' => 'form-control' . ($errors->has('apellidoDeCasadaE') ? ' is-invalid' : ''), 'placeholder' => 'Apellido de casada']) }}
            {!! $errors->first('apellidoDeCasadaE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FECHA DE NACIMIENTO') }}
            {{ Form::text('fechaNaciemientoE', $ficha1->fechaNaciemientoE, ['class' => 'form-control' . ($errors->has('fechaNaciemientoE') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de nacimiento']) }}
            {!! $errors->first('fechaNaciemientoE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TELEFONO DE CASA') }}
            {{ Form::text('telefonodecasaE', $ficha1->telefonodecasaE, ['class' => 'form-control' . ($errors->has('telefonodecasaE') ? ' is-invalid' : ''), 'placeholder' => 'Telefono de casa']) }}
            {!! $errors->first('telefonodecasaE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CELULAR') }}
            {{ Form::text('celularE', $ficha1->celularE, ['class' => 'form-control' . ($errors->has('celularE') ? ' is-invalid' : ''), 'placeholder' => 'No. Celular']) }}
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
    <div>
        <p style="text-align:justify;">
            Declaración de la participación en las prácticas de Boliche en cualquiera de sus eventos: Estoy consciente que es un deporte en donde existen riesgos de accidentes y lesiones como en cualquier otro, situación por la cual eximo a la Federación Nacional de Boliche de Guatemala y a la Asociación Deportiva Departamental de Boliche de Quetzaltenango, por aquellas circunstancias antes mencionas que puedan ocurrir, y que se presente antes, durante o después de las sesiones de práctica y/o competencias organizadas por la Federación o por la Asociación.
        </p>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">ACEPTAR</button>
    </div>
</div>