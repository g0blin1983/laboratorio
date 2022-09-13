@extends('layouts.app')

@section('template_title')
    Archivo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-white" style="background-color: #778899;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Archivo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('archivos.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo archivo') }}
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
                                        <th>#</th>
                                        
										<th>N° Archivo</th>
										<th>Fecha Ingreso</th>
										<th>Caratulada</th>
										<th>Calles</th>
										<th>Depedencia</th>
										<th>Respuesta</th>
										<th>Fecha Salida</th>
										<th>Description</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($archivos as $archivo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $archivo->numero_archivo }}</td>
											<td>{{ $archivo->fecha_ingreso }}</td>
											<td>{{ $archivo->caratulas_id }}</td>
											<td>{{ $archivo->calles }}</td>
											<td>{{ $archivo->depedencias_id }}</td>
											<td>{{ $archivo->respuesta }}</td>
											<td>{{ $archivo->fecha_salida }}</td>
											<td>{{ $archivo->Description }}</td>

                                            <td>
                                                <form action="{{ route('archivos.destroy',$archivo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('archivos.show',$archivo->id) }}"><i class="fa fa-fw fa-eye"></i> Detalle </a>
                                                    <a class="btn btn-sm btn-secondary" href="{{ route('archivos.edit',$archivo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-dark btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $archivos->links() !!}
            </div>
        </div>
    </div>
@endsection
