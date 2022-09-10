@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="card border-dark col-md-10">
            <div class="card-header">Panel de Control</div>
            <div class="card-body text-dark">
              <h5 class="card-title">Titulo</h5>
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum vel illo, dolores nobis voluptatem earum nulla commodi ut aperiam maxime error consequuntur in minus iusto fuga aspernatur doloremque accusamus atque esse neque. Veniam at quam, molestiae, amet unde itaque repellat harum excepturi eius aperiam beatae ab veritatis quaerat odit voluptatum velit praesentium quisquam, nemo odio. Temporibus perspiciatis quo minus incidunt facere, officiis quos quisquam explicabo tempore, ipsum corporis consequuntur porro dolores quaerat quod, deleniti voluptatem laborum expedita placeat! Perferendis ipsam magni neque qui numquam rerum delectus labore laborum. Magni minima dolor aspernatur. Ab aperiam id reiciendis facilis alias sit deleniti!</p>
            </div>
          </div>
{{--         <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
