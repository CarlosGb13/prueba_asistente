<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_trans') }}
            {{ Form::text('nombre_trans', $transportista->nombre_trans, ['class' => 'form-control' . ($errors->has('nombre_trans') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Trans']) }}
            {!! $errors->first('nombre_trans', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado_trans') }}
            {{ Form::text('estado_trans', $transportista->estado_trans, ['class' => 'form-control' . ($errors->has('estado_trans') ? ' is-invalid' : ''), 'placeholder' => 'Estado Trans']) }}
            {!! $errors->first('estado_trans', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>