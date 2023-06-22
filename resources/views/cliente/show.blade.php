@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? "{{ __('Show') Cliente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Cliente:</strong>
                            {{ $cliente->nombre_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Cliente:</strong>
                            {{ $cliente->apellido_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $cliente->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Civil:</strong>
                            {{ $cliente->estado_civil }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $cliente->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
