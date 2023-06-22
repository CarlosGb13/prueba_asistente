@extends('layouts.app')

@section('template_title')
    Transporte
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Transporte') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('transportes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Transporte') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Transportista</th>
										<th>No Placa</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transportes as $transporte)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $transporte->transportista }}</td>
											<td>{{ $transporte->no_placa }}</td>
											<td>{{ $transporte->estado }}</td>

                                            <td>
                                                <form action="{{ route('transportes.destroy',$transporte->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('transportes.show',$transporte->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver Transporte') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('transportes.edit',$transporte->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar Transporte') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar Transporte') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $transportes->links() !!}
            </div>
        </div>
    </div>
@endsection
