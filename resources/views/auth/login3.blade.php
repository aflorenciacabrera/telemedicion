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
    <main class="py-5">
       
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card encabezado">
                    {{-- <div class="card-header text-center">
                        {{ __('Login') }}
                        Iniciar sesión
                    </div> --}}
    
                    <div class="card-body">
                        <div class="container py-4">
                            <div class=" row justify-content-center">
                            <div class="col-8 col-md-4">
                                <a class="navbar-brand" href="{{ url('/home') }}">
                                    {{-- {{ config('app.name', 'Laravel') }} --}}
                                    <img src="{{ asset('image/logo-normal-1.png') }}" alt=""style="width: 70%"   >
                                    &nbsp;
                                    <img src="{{ asset('image/LogoMacro.png') }}" alt="" style="width: 40%" >
                                </a>
                            </div>
                        </div>
                    </div>
                        
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="container py-4">
                                <div class=" row justify-content-center">
                            <div class="col-6 col-md-4">
                            <div class="form-group row">
                                <div class="input-group form-group">
                                
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" name="email" class="form-control" placeholder="Cliente">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group form-group">
                                
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" name="email" class="form-control" placeholder="Suministro">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-light">
                                        {{-- {{ __('Login') }} --}}
                                        Consultar
                                    </button>
    
                                    {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        </form>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</main>
</body>
   
   
</html>



