@extends('layouts.app')

@section('template_title')
    Transportista
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Transportista') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('transportistas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre Trans</th>
										<th>Estado Trans</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transportistas as $transportista)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $transportista->nombre_trans }}</td>
											<td>{{ $transportista->estado_trans }}</td>

                                            <td>
                                                <form action="{{ route('transportistas.destroy',$transportista->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('transportistas.show',$transportista->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('transportistas.edit',$transportista->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $transportistas->links() !!}
            </div>
        </div>
    </div>
@endsection
