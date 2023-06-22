@extends('layouts.app')

@section('template_title')
    Empaque
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empaque') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empaques.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre Empaque</th>
										<th>Estado</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empaques as $empaque)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empaque->nombre_empaque }}</td>
											<td>{{ $empaque->estado }}</td>
											<td>{{ $empaque->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('empaques.destroy',$empaque->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empaques.show',$empaque->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empaques.edit',$empaque->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $empaques->links() !!}
            </div>
        </div>
    </div>
@endsection
