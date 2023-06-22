<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('transportista') }}
            {{ Form::text('transportista', $transporte->transportista, ['class' => 'form-control' . ($errors->has('transportista') ? ' is-invalid' : ''), 'placeholder' => 'Transportista']) }}
            {!! $errors->first('transportista', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_placa') }}
            {{ Form::text('no_placa', $transporte->no_placa, ['class' => 'form-control' . ($errors->has('no_placa') ? ' is-invalid' : ''), 'placeholder' => 'No Placa']) }}
            {!! $errors->first('no_placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $transporte->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>