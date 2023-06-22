<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('producto') }}
            {{ Form::text('producto', $despacho->producto, ['class' => 'form-control' . ($errors->has('producto') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso_tara') }}
            {{ Form::text('peso_tara', $despacho->peso_tara, ['class' => 'form-control' . ($errors->has('peso_tara') ? ' is-invalid' : ''), 'placeholder' => 'Peso Tara']) }}
            {!! $errors->first('peso_tara', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso_bruto') }}
            {{ Form::text('peso_bruto', $despacho->peso_bruto, ['class' => 'form-control' . ($errors->has('peso_bruto') ? ' is-invalid' : ''), 'placeholder' => 'Peso Bruto']) }}
            {!! $errors->first('peso_bruto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso_neto') }}
            {{ Form::text('peso_neto', $despacho->peso_neto, ['class' => 'form-control' . ($errors->has('peso_neto') ? ' is-invalid' : ''), 'placeholder' => 'Peso Neto']) }}
            {!! $errors->first('peso_neto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_peso') }}
            {{ Form::text('fecha_peso', $despacho->fecha_peso, ['class' => 'form-control' . ($errors->has('fecha_peso') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Peso']) }}
            {!! $errors->first('fecha_peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_despacho') }}
            {{ Form::text('fecha_despacho', $despacho->fecha_despacho, ['class' => 'form-control' . ($errors->has('fecha_despacho') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Despacho']) }}
            {!! $errors->first('fecha_despacho', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('transportista') }}
            {{ Form::text('transportista', $despacho->transportista, ['class' => 'form-control' . ($errors->has('transportista') ? ' is-invalid' : ''), 'placeholder' => 'Transportista']) }}
            {!! $errors->first('transportista', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cliente') }}
            {{ Form::text('cliente', $despacho->cliente, ['class' => 'form-control' . ($errors->has('cliente') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('piloto') }}
            {{ Form::text('piloto', $despacho->piloto, ['class' => 'form-control' . ($errors->has('piloto') ? ' is-invalid' : ''), 'placeholder' => 'Piloto']) }}
            {!! $errors->first('piloto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>