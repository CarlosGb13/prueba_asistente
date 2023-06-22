<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_cliente') }}
            {{ Form::text('nombre_cliente', $cliente->nombre_cliente, ['class' => 'form-control' . ($errors->has('nombre_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente']) }}
            {!! $errors->first('nombre_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_cliente') }}
            {{ Form::text('apellido_cliente', $cliente->apellido_cliente, ['class' => 'form-control' . ($errors->has('apellido_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Cliente']) }}
            {!! $errors->first('apellido_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nacimiento') }}
            {{ Form::text('fecha_nacimiento', $cliente->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado_civil') }}
            {{ Form::text('estado_civil', $cliente->estado_civil, ['class' => 'form-control' . ($errors->has('estado_civil') ? ' is-invalid' : ''), 'placeholder' => 'Estado Civil']) }}
            {!! $errors->first('estado_civil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $cliente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>