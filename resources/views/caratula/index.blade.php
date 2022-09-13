@extends('layouts.app')

@section('template_title')
    Caratula
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-white" style="background-color: #778899;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Caratula') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('caratulas.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva caratula') }}
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
                                        
										<th>Caratulas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caratulas as $caratula)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caratula->caratulas }}</td>

                                            <td>
                                                <form action="{{ route('caratulas.destroy',$caratula->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('caratulas.show',$caratula->id) }}"><i class="fa fa-fw fa-eye"></i> Detalle</a>
                                                    <a class="btn btn-sm btn-secondary" href="{{ route('caratulas.edit',$caratula->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-dark btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $caratulas->links() !!}
            </div>
        </div>
    </div>
@endsection
