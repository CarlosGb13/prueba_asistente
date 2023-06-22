@extends('layouts.app')

@section('template_title')
    {{ $despacho->name ?? "{{ __('Show') Despacho" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Despacho</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('despachos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $despacho->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Peso Tara:</strong>
                            {{ $despacho->peso_tara }}
                        </div>
                        <div class="form-group">
                            <strong>Peso Bruto:</strong>
                            {{ $despacho->peso_bruto }}
                        </div>
                        <div class="form-group">
                            <strong>Peso Neto:</strong>
                            {{ $despacho->peso_neto }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Peso:</strong>
                            {{ $despacho->fecha_peso }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Despacho:</strong>
                            {{ $despacho->fecha_despacho }}
                        </div>
                        <div class="form-group">
                            <strong>Transportista:</strong>
                            {{ $despacho->transportista }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $despacho->cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Piloto:</strong>
                            {{ $despacho->piloto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
