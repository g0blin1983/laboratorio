@extends('layouts.app')

@section('template_title')
    Dependencia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-white" style="background-color: #778899;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Dependencias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('dependencias.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva dependencia') }}
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
                                        <th>ID</th>
                                        
										<th>Dependencias</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dependencias as $dependencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $dependencia->dependencias }}</td>

                                            <td>
                                                <form action="{{ route('dependencias.destroy',$dependencia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('dependencias.show',$dependencia->id) }}">Show</a>
                                                    <a class="btn btn-sm btn-secondary" href="{{ route('dependencias.edit',$dependencia->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-dark btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $dependencias->links() !!}
            </div>
        </div>
    </div>
@endsection
