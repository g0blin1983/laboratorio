<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratorio Judicial de Iamgenes y Estadisticas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light sticky-top text-end" style="background-color: #8899AA;">
            @if (Route::has('login'))
                @auth
                <div class="col container-fluid">
                    <a class="navbar-brand" href="{{ url('/home') }}">Inicio</a>
                </div>
                @else
                <div class="col">
                    <a class="navbar-brand" href="{{ route('login') }}">Ingresar</a>                    
                    @if (Route::has('register'))
                        <a class="navbar-brand" href="{{ route('register') }}">Registrar</a>
                    @endif
                </div>
                @endauth
            @endif
    </nav>
<div class="container center">
    <img class="img-fluid" src="{{URL::asset('images/logo.png')}}">
</div>
<div class="row"></div>
<div class="row text-center"><h1>Subsecretaria de Seguridad y Justicia.</h1></div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> --}}
  </body>
</html>







{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container-fluid">
                asd
               <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

                        
                        <img src="{{URL::asset('images/logo.png')}}">
                        
                </div>

                <div>
                    <h1><p class="text-center">Subsecretaria de Seguridad y Justicia</p></h1>
                </div>
            </div>
        </div>
    </body>
</html> --}}
