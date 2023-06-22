@extends('layouts.app')

@section('template_title')
    {{ $piloto->name ?? "{{ __('Show') Piloto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Piloto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pilotos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Piloto:</strong>
                            {{ $piloto->nombre_piloto }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Piloto:</strong>
                            {{ $piloto->apellido_piloto }}
                        </div>
                        <div class="form-group">
                            <strong>Licencia:</strong>
                            {{ $piloto->licencia }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Licencia:</strong>
                            {{ $piloto->tipo_licencia }}
                        </div>
                        <div class="form-group">
                            <strong>Transportista:</strong>
                            {{ $piloto->transportista }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
