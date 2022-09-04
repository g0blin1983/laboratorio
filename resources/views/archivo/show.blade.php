@extends('layouts.app')

@section('template_title')
    {{ $archivo->name ?? 'Show Archivo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Archivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('archivos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero Archivo:</strong>
                            {{ $archivo->numero_archivo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ingreso:</strong>
                            {{ $archivo->fecha_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Caratulas Id:</strong>
                            {{ $archivo->caratulas_id }}
                        </div>
                        <div class="form-group">
                            <strong>Calles:</strong>
                            {{ $archivo->calles }}
                        </div>
                        <div class="form-group">
                            <strong>Depedencias Id:</strong>
                            {{ $archivo->depedencias_id }}
                        </div>
                        <div class="form-group">
                            <strong>Respuesta:</strong>
                            {{ $archivo->respuesta }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Salida:</strong>
                            {{ $archivo->fecha_salida }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $archivo->Description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
