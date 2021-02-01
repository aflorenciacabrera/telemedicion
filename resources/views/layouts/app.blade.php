<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'SECHEEP') }}</title> --}}
    <title>secheep | Energía de todos  </title>
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

    
    <script  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
{{-- <script src="https://code.highcharts.com/modules/exporting.js"></script> --}}

    
    <script src="{{ asset('js/sweetalert2.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.12.5/sweetalert2.min.css" integrity="sha512-EeZYT52DgUwGU45iNoywycYyJW/C2irAZhp2RZAA0X4KtgE4XbqUl9zXydANcIlEuF+BXpsooxzkPW081bqoBQ==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.12.5/sweetalert2.js" integrity="sha512-Np2PHh3yzqh73671Ozu5k3FMOeKHsC6VAtMpEd9HkWtm2NrOyph8KUbK1zvxFnGRPtEnuinqNq27LcFI3ZlM+g==" crossorigin="anonymous"></script>
    
    @laravelPWA
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
            <div class="container">
                {{-- <div class="row"> --}}
                    <div class="col-6 col-md-3">
                        <a class="navbar-brand cargando" href="{{ url('/home') }}">
                            {{-- {{ config('app.name', 'Laravel') }} --}}
                            <img src="{{ asset('image/marcas.png') }}" alt=""style="width: 150%" >
                            &nbsp;
                            <img src="{{ asset('image/LogoMacro.png') }}" alt="" style="width: 40%">
                        </a>
                    </div>
                {{-- </div> --}}
                {{-- <div class="row">
                    <div class=" col-3"> 
                    <a class="navbar-brand" href="{{ url('/') }}">
                      
                        <img src="{{ asset('image/logo-normal-1.png') }}" alt=""style="width: 90%" >
                        &nbsp;
                        <img src="{{ asset('image/LogoMacro.png') }}" alt="" style="width: 80%">
                    </a>
                    </div>
                </div> --}}
                @auth
                    <div class="d-block d-md-none">
                        <button class="navbar-toggler   border-white"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            {{-- <span class="navbar-toggler-icon -white"   ></span> --}}
                            <i class="fa fa-bars" aria-hidden="true"style="color: white;"></i>
                        </button>
                    </div>
                @endauth 
            {{-- <button class="navbar-toggler border-bottom-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> --}}             
                {{-- @auth
                <div class="d-block d-md-none">
                   
                <a id="navbarDropdown" class="nav-link btn btn-light dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}
                </a>
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-center" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp; Salir
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </div>
                @endauth     --}}
            {{-- </button> --}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto ">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto d-none d-md-block">
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
                            <li class="nav-item dropdown ">
                                <a id="navbarDropdown" class="nav-link btn btn-light dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item cargando" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp; Cerrar sesión
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                    </ul>
                    @auth
                    <div class="d-block d-md-none">   
                         {{-- boton movil --}}
             
                        <ul class="navbar-nav text-font  "> 
                            <hr>
                            <li class="nav-item ">
                                <div class="col" >
                                    <a  class="nav-link btn btn-link text-left text-white " href="#" role="button"   aria-haspopup="true" aria-expanded="false" v-pre>
                                        <h5><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}</h5>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item ">
                               
                                    <a class=" dropdown-item  text-white border-0 rounded cargando"  href="{{ route('perfil') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                        <h5> <i class="fa fa-address-card" aria-hidden="true"></i> &nbsp; Mis datos </h5>
                                    </a> 
                                
                            </li>
                            <li class="nav-item">
                               
                                    <a class=" dropdown-item   text-white rounded border-0 cargando"  href="{{ route('misconsumos') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                        <h5> <i class="fa fa-bar-chart" aria-hidden="true"></i> &nbsp; Mis consumos </h5>
                                    </a>
                                
                            </li>
                            <li class="nav-item">
                               
                                    <a class=" dropdown-item   text-white rounded border-0 cargando"  href="{{ route('misfacturas') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                        <h5> <i class="fa fa-file-text-o" aria-hidden="true"></i> &nbsp;  Mis facturaciones </h5>
                                    </a>
                                
                            </li>
        
                            <li class="nav-item">
                                
                                    <a class=" dropdown-item   text-white rounded border-0 cargando"  href="{{ route('ubicacionmedidor') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                        <h5> <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Mi  ubicación  </h5>
                                    </a>
                               
                            </li> 
                            <div class="dropdown-divider"></div>
                            {{-- <hr> --}}
                            <li class="nav-item">
                               
                                    <a class=" dropdown-item   text-white border-0 rounded cargando" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                    <h5><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp; Cerrar sesión</h5>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            </li>               
                        </ul>
                        
                    </div>
                    @endauth 
                </div>
            </div>
        </nav>

     @auth
     <div class="d-none d-md-block">
    <nav class="navbar  navbar-expand-md navbar-dark bg-dark ">
            {{-- <a class="navbar-brand" href="#"> <img class="logo" src="http://bootstrap-ecommerce.com/main/images/logo-white.png" height="40"> LOGO</a>--}}
          {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>  MENU
          </button>  --}}
        {{-- <div class="collapse navbar-collapse " id="navbar1"> --}}
           
                 {{-- boton web --}}
                <ul class="navbar-nav mr-auto text-right text-font"> 
                    <li class="nav-item ">                      
                        <a class="nav-link btn btn-link prueba cargando"  href="{{ route('perfil') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                            <h5> <i class="fa fa-address-card" aria-hidden="true"></i> &nbsp; Mis datos </h5>
                        </a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-link prueba cargando"  href="{{ route('misconsumos') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                            <h5> <i class="fa fa-bar-chart" aria-hidden="true"></i> &nbsp; Mis consumos </h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-link prueba cargando"  href="{{ route('misfacturas') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                            <h5> <i class="fa fa-file-text-o" aria-hidden="true"></i> &nbsp; Mis facturaciones </h5>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-link prueba cargando"  href="{{ route('ubicacionmedidor') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                            <h5> <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Mi  ubicación</h5>
                        </a>
                    </li>               
                </ul>
           
            {{-- <div class="d-block d-md-none">
                <hr>   
                 boton movil
                <ul class="navbar-nav  "> 
                    <li class="nav-item ">
                        <div class="col" >
                            <a class="nav-link btn btn-link text-left "  href="{{ route('perfil') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                <h5> <i class="fa fa-address-card" aria-hidden="true"></i> &nbsp; Mis datos </h5>
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
            </div> --}}
        {{-- </div> --}}
    </nav>
</div>
    @endauth       
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</body>
    @yield('script')
    <script>
   
    $(document).ready(function(){        
        swal.close()
    })
    </script>
   
</html>
