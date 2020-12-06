<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'SECHEEP') }}</title> --}}
    <title>SECHEEP</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- Iconos fa fas 4 y 5 --}}
    {{-- <script src="https://kit.fontawesome.com/yourcode.js"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">

    {{-- <link rel="stylesheet" type="text/css" href="path/to/chartjs/dist/Chart.min.css"> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script> --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light encabezado shadow-sm">
            <div class="container">
               
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{ asset('image/logo-normal-1.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}"><h4>{{ __('Ingresar') }}</h4></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}"><h4>{{ __('Registrarse') }}</h4></a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link btn btn-light dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

     @auth
    <nav class="navbar  navbar-expand-md navbar-dark menu ">
            {{-- <a class="navbar-brand" href="#"> <img class="logo" src="http://bootstrap-ecommerce.com/main/images/logo-white.png" height="40"> LOGO</a>--}}
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>  MENU
          </button> 
        <div class="collapse navbar-collapse menu" id="navbar1">
            <div class="d-none d-md-block">
                 {{-- boton web --}}
                <ul class="navbar-nav mr-auto text-right"> 
                    <li class="nav-item ">                      
                        <a class="nav-link btn btn-link"  href="{{ route('perfil') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                            <h5> <i class="fa fa-address-card" aria-hidden="true"></i> &nbsp; Perfil </h5>
                        </a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-link"  href="{{ route('misconsumos') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                            <h5> <i class="fa fa-bar-chart" aria-hidden="true"></i> &nbsp; Mis consumos </h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-link"  href="{{ route('misfacturas') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                            <h5> <i class="fa fa-file-text-o" aria-hidden="true"></i> &nbsp; Facturación </h5>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-link"  href="{{ route('ubicacionmedidor') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                            <h5> <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Ubicación del Medidor </h5>
                        </a>
                    </li>               
                </ul>
            </div>
            <div class="d-block d-md-none">
                <hr>   
                 {{-- boton movil --}}
                <ul class="navbar-nav  "> 
                    <li class="nav-item ">
                        <div class="col" >
                            <a class="nav-link btn btn-link text-left "  href="{{ route('perfil') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                <h5> <i class="fa fa-address-card" aria-hidden="true"></i> &nbsp; Perfil </h5>
                            </a> 
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                            <a class="nav-link btn btn-link text-left"  href="{{ route('misconsumos') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                <h5> <i class="fa fa-bar-chart" aria-hidden="true"></i> &nbsp; Mis consumos </h5>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                            <a class="nav-link btn btn-link text-left"  href="{{ route('misfacturas') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                <h5> <i class="fa fa-file-text-o" aria-hidden="true"></i> &nbsp; Facturación </h5>
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="col">
                            <a class="nav-link btn btn-link text-left"  href="{{ route('ubicacionmedidor') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                <h5> <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Ubicación del Medidor </h5>
                            </a>
                        </div>
                    </li>               
                </ul>
            </div>
        </div>
    </nav>
    @endauth       
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</body>
    @yield('script')
</html>
<style>
    
</style>