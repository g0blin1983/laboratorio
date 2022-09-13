@extends('layouts.app')

@section('template_title')
    Create Dependencia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header text-white" style="background-color: #778899;">
                        <span class="card-title">Create Dependencia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('dependencias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('dependencia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
