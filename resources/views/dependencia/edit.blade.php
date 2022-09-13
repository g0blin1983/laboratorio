@extends('layouts.app')

@section('template_title')
Actualizar dependencia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header text-white" style="background-color: #778899;">
                        <span class="card-title">Actualizar dependencia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('dependencias.update', $dependencia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('dependencia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
