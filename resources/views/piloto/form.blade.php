<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_piloto') }}
            {{ Form::text('nombre_piloto', $piloto->nombre_piloto, ['class' => 'form-control' . ($errors->has('nombre_piloto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Piloto']) }}
            {!! $errors->first('nombre_piloto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_piloto') }}
            {{ Form::text('apellido_piloto', $piloto->apellido_piloto, ['class' => 'form-control' . ($errors->has('apellido_piloto') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Piloto']) }}
            {!! $errors->first('apellido_piloto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('licencia') }}
            {{ Form::text('licencia', $piloto->licencia, ['class' => 'form-control' . ($errors->has('licencia') ? ' is-invalid' : ''), 'placeholder' => 'Licencia']) }}
            {!! $errors->first('licencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_licencia') }}
            {{ Form::text('tipo_licencia', $piloto->tipo_licencia, ['class' => 'form-control' . ($errors->has('tipo_licencia') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Licencia']) }}
            {!! $errors->first('tipo_licencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('transportista') }}
            {{ Form::text('transportista', $piloto->transportista, ['class' => 'form-control' . ($errors->has('transportista') ? ' is-invalid' : ''), 'placeholder' => 'Transportista']) }}
            {!! $errors->first('transportista', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>