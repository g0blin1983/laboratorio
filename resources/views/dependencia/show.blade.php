@extends('layouts.app')

@section('template_title')
    {{ $dependencia->name ?? 'Show Dependencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white" style="background-color: #778899;">
                        <div>
                            <span class="card-title">Show Dependencia</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Dependencias:</strong>
                            {{ $dependencia->dependencias }}
                        </div>
                        <div>
                            <a class="btn btn-success my-2" href="{{ route('dependencias.index') }}">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
