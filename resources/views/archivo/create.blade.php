@extends('layouts.app')

@section('template_title')
    Crear Archivo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header text-white" style="background-color: #778899;">
                        <span class="card-title">Crear nuevo archivo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('archivos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('archivo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
