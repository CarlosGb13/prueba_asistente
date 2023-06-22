@extends('layouts.app')

@section('template_title')
    Recepcion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Recepcion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('recepcions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Recepcion') }}
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
                                        
										<th>Cliente</th>
										<th>Transportista</th>
										<th>No Placa</th>
										<th>Piloto</th>
										<th>Fecha Recepcion</th>
										<th>Nombre Producto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recepcions as $recepcion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $recepcion->cliente }}</td>
											<td>{{ $recepcion->transportista }}</td>
											<td>{{ $recepcion->no_placa }}</td>
											<td>{{ $recepcion->piloto }}</td>
											<td>{{ $recepcion->fecha_recepcion }}</td>
											<td>{{ $recepcion->nombre_producto }}</td>

                                            <td>
                                                <form action="{{ route('recepcions.destroy',$recepcion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('recepcions.show',$recepcion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Listar Recepciones') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('recepcions.edit',$recepcion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar Recepcion') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Elimiar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $recepcions->links() !!}
            </div>
        </div>
    </div>
@endsection
