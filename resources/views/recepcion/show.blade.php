@extends('layouts.app')

@section('template_title')
    {{ $recepcion->name ?? "{{ __('Show') Recepcion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Recepcion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recepcions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $recepcion->cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Transportista:</strong>
                            {{ $recepcion->transportista }}
                        </div>
                        <div class="form-group">
                            <strong>No Placa:</strong>
                            {{ $recepcion->no_placa }}
                        </div>
                        <div class="form-group">
                            <strong>Piloto:</strong>
                            {{ $recepcion->piloto }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Recepcion:</strong>
                            {{ $recepcion->fecha_recepcion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $recepcion->nombre_producto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
