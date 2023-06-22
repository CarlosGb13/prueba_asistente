@extends('layouts.app')

@section('template_title')
    {{ $transportista->name ?? "{{ __('Show') Transportista" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Transportista</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('transportistas.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Transporte:</strong>
                            {{ $transportista->nombre_trans }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Trans:</strong>
                            {{ $transportista->estado_trans }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
