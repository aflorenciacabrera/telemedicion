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
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
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
        <nav class="navbar navbar-expand-md navbar-dark menu ">
            {{-- <a class="navbar-brand" href="#"> <img class="logo" src="http://bootstrap-ecommerce.com/main/images/logo-white.png" height="40"> LOGO</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> --}}
          <div class="collapse navbar-collapse menu" id="navbar1">
            <ul class="navbar-nav mr-auto"> 
                <li class="nav-item ">
                    <a class=" nav-link " href=""> <h5> <i class="fa fa-address-card" aria-hidden="true"></i> &nbsp; Perfil &nbsp;|</h5> </a> 
                </li>
                <li class="nav-item">
                    <a class=" nav-link " href=""><h5> <i class="fa fa-bar-chart" aria-hidden="true"></i> &nbsp; Mis consumos &nbsp;|</h5></a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link m" href=""><h5> <i class="fa fa-file-text-o" aria-hidden="true"></i> &nbsp; Facturación &nbsp;|</h5></a>
                </li>

                <li class="nav-item">
                    <a class=" nav-link " href=""><h5> <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Ubicacion del Medidor </h5></a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Dropdown  </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"> Menu item 1</a></li>
                    <li><a class="dropdown-item" href="#"> Menu item 2 </a></li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="btn ml-2 btn-dark" href="http://bootstrap-ecommerce.com">Download</a>
                </li> --}}
            </ul>
          </div>
        </nav>
    @endauth

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
