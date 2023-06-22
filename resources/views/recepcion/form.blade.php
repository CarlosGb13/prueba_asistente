<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cliente') }}
            {{ Form::text('cliente', $recepcion->cliente, ['class' => 'form-control' . ($errors->has('cliente') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('transportista') }}
            {{ Form::text('transportista', $recepcion->transportista, ['class' => 'form-control' . ($errors->has('transportista') ? ' is-invalid' : ''), 'placeholder' => 'Transportista']) }}
            {!! $errors->first('transportista', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_placa') }}
            {{ Form::text('no_placa', $recepcion->no_placa, ['class' => 'form-control' . ($errors->has('no_placa') ? ' is-invalid' : ''), 'placeholder' => 'No Placa']) }}
            {!! $errors->first('no_placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('piloto') }}
            {{ Form::text('piloto', $recepcion->piloto, ['class' => 'form-control' . ($errors->has('piloto') ? ' is-invalid' : ''), 'placeholder' => 'Piloto']) }}
            {!! $errors->first('piloto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_recepcion') }}
            {{ Form::text('fecha_recepcion', $recepcion->fecha_recepcion, ['class' => 'form-control' . ($errors->has('fecha_recepcion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Recepcion']) }}
            {!! $errors->first('fecha_recepcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_producto') }}
            {{ Form::text('nombre_producto', $recepcion->nombre_producto, ['class' => 'form-control' . ($errors->has('nombre_producto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Producto']) }}
            {!! $errors->first('nombre_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>