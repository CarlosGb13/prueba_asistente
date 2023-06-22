@extends('layouts.app')

@section('template_title')
    {{ $empaque->name ?? "{{ __('Show') Empaque" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empaque</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empaques.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Empaque:</strong>
                            {{ $empaque->nombre_empaque }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $empaque->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $empaque->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
