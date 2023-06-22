@extends('layouts.app')

@section('template_title')
    Despacho
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Despacho') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('despachos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Producto</th>
										<th>Peso Tara</th>
										<th>Peso Bruto</th>
										<th>Peso Neto</th>
										<th>Fecha Peso</th>
										<th>Fecha Despacho</th>
										<th>Transportista</th>
										<th>Cliente</th>
										<th>Piloto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($despachos as $despacho)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $despacho->producto }}</td>
											<td>{{ $despacho->peso_tara }}</td>
											<td>{{ $despacho->peso_bruto }}</td>
											<td>{{ $despacho->peso_neto }}</td>
											<td>{{ $despacho->fecha_peso }}</td>
											<td>{{ $despacho->fecha_despacho }}</td>
											<td>{{ $despacho->transportista }}</td>
											<td>{{ $despacho->cliente }}</td>
											<td>{{ $despacho->piloto }}</td>

                                            <td>
                                                <form action="{{ route('despachos.destroy',$despacho->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('despachos.show',$despacho->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('despachos.edit',$despacho->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $despachos->links() !!}
            </div>
        </div>
    </div>
@endsection
