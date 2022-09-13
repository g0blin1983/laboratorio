@extends('layouts.app')

@section('template_title')
    {{ $caratula->name ?? 'Show Caratula' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white" style="background-color: #778899;">
                        <div class="float-left">
                            <span class="card-title">Detalle de Caratula</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Caratulas: </strong>
                            {{ $caratula->caratulas }}
                        </div>
                        <div>
                            <a class="btn btn-success my-2" href="{{ route('caratulas.index') }}">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
