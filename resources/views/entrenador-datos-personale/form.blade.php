<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('cui') }}
                    {{ Form::text('cui', $entrenadorDatosPersonale->cui, ['class' => 'form-control' . ($errors->has('cui') ? ' is-invalid' : ''), 'placeholder' => 'Cui']) }}
                    {!! $errors->first('cui', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('Primer nombre') }}
                    {{ Form::text('nombre1', $entrenadorDatosPersonale->nombre1, ['class' => 'form-control' . ($errors->has('nombre1') ? ' is-invalid' : ''), 'placeholder' => 'Primer nombre']) }}
                    {!! $errors->first('nombre1', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('Segundo nombre') }}
                    {{ Form::text('nombre2', $entrenadorDatosPersonale->nombre2, ['class' => 'form-control' . ($errors->has('nombre2') ? ' is-invalid' : ''), 'placeholder' => 'Segundo nombre']) }}
                    {!! $errors->first('nombre2', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('Primer apellido') }}
                    {{ Form::text('apellido1', $entrenadorDatosPersonale->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Primer apellido']) }}
                    {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('Segundo apellido') }}
                    {{ Form::text('apellido2', $entrenadorDatosPersonale->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Segundo apellido']) }}
                    {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('Apellido de casada') }}
                    {{ Form::text('apellidoDeCasada', $entrenadorDatosPersonale->apellidoDeCasada, ['class' => 'form-control' . ($errors->has('apellidoDeCasada') ? ' is-invalid' : ''), 'placeholder' => 'Apellido de casada']) }}
                    {!! $errors->first('apellidoDeCasada', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('Fecha de naciemiento') }}
                    {{ Form::date('fechaNaciemiento', $entrenadorDatosPersonale->fechaNaciemiento, ['class' => 'form-control' . ($errors->has('fechaNaciemiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de naciemiento']) }}
                    {!! $errors->first('fechaNaciemiento', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('Telefono de casa') }}
                    {{ Form::text('telefonodecasa', $entrenadorDatosPersonale->telefonodecasa, ['class' => 'form-control' . ($errors->has('telefonodecasa') ? ' is-invalid' : ''), 'placeholder' => 'Telefono de casa']) }}
                    {!! $errors->first('telefonodecasa', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('celular') }}
                    {{ Form::text('celular', $entrenadorDatosPersonale->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
                    {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('genero') }}
                    {{ Form::text('genero', $entrenadorDatosPersonale->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
                    {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('Municipio') }}
                    {{ Form::select('idMunicipio', $municipios ,$entrenadorDatosPersonale->idMunicipio, ['class' => 'form-control' . ($errors->has('idMunicipio') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
                    {!! $errors->first('idMunicipio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    {{ Form::label('dirección') }}
                    {{ Form::text('direccion', $entrenadorDatosPersonale->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
                    {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Enviar datos</button>
        <a class="btn btn-primary" href="{{ route('entrenador-datos-personales.index') }}"> Regresar</a>
    </div>
</div>