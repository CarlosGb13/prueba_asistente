@extends('layouts.app')

@section('template_title')
    Piloto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Piloto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pilotos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Piloto') }}
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
                                        
										<th>Nombre Piloto</th>
										<th>Apellido Piloto</th>
										<th>Licencia</th>
										<th>Tipo Licencia</th>
										<th>Transportista</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pilotos as $piloto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $piloto->nombre_piloto }}</td>
											<td>{{ $piloto->apellido_piloto }}</td>
											<td>{{ $piloto->licencia }}</td>
											<td>{{ $piloto->tipo_licencia }}</td>
											<td>{{ $piloto->transportista }}</td>

                                            <td>
                                                <form action="{{ route('pilotos.destroy',$piloto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pilotos.show',$piloto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver Piloto') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pilotos.edit',$piloto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar Piloto') }}</a>
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
                {!! $pilotos->links() !!}
            </div>
        </div>
    </div>
@endsection
