<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lu-styles.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="clearfix mt-2 mb-2">
                <div class="float-left mt-2">
                    <strong>DARKKITCHEN</strong>
                </div>
            @if (Route::has('login'))
                <div class="float-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary rounded-0">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success rounded-0">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-primary rounded-0">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>

            <div class="bg-light-gray d-flex justify-content-center align-items-center" style="height: 400px;">
                Hola
            </div>
        </div>
    </body>
</html>
